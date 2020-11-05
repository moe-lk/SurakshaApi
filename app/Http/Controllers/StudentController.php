<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use \GuzzleHttp\Exception\ClientException;

class StudentController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/student/{nsid}",
     *     summary="Search student by NSID",
     *     description="Returns a single student for the provided NSID",
     *     operationId="getStudentByNSID",
     *     tags={"student"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="NSID of the student to return (ex: ABC-123-000)",
     *         in="path",
     *         name="nsid",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(response=200, description="Student found", @SWG\Schema(ref="#/definitions/Student")),
     *     @SWG\Response(response=404, description="Invalid NSID provided or Student not found"),
     *     @SWG\Response(response=500, description="Internal server error"),
     *     security={{"api_key": {}}}
     * )
     */
    public function getStudentByNSID($nsid){
        try {        
            $student_data = DB::table('security_users')->where('openemis_no', $nsid)->first();
            $student_id = $student_data->id;
    
            if(!$student_data) return $this->_sendResponse("Invalid NSID provided or Student not found", 404);
    
            $institution_student = DB::table('institution_students')->where('student_id', $student_id)->first();
            $institution = DB::table('institutions')->where('id', $institution_student->institution_id)->first();                  
        
            $student_guardians = DB::table('student_guardians')->where('student_id', $student_id)->get();
            $father = null;
            $mother = null;
            $guardian = null;

            foreach($student_guardians as $student_guardian) {
                $student_guardian_data = DB::table('security_users')->where('id', $student_guardian->guardian_id)->first();

                switch($student_guardian->guardian_relation_id) {
                    case 1: $father = $student_guardian_data; break;
                    case 2: $mother = $student_guardian_data; break;
                    case 0: $guardian = $student_guardian_data; break;
                }
            }
            
            $student = new Student();

            $student->nsid = $nsid;
            $student->student_name_with_initials = $student_data->last_name;
            $student->student_full_name = $student_data->first_name;
            $student->student_date_of_birth = $student_data->date_of_birth;
            $student->school_census_id = $institution->code;
            $student->school_name = $institution->name;
            $student->school_address = $institution->address;
            $student->student_admission_id = $institution_student->admission_id;
            $student->mothers_name = $mother ? $mother->first_name : null;
            $student->mothers_nic = $mother ? $mother->identity_number : null;
            $student->fathers_name = $father ? $father->first_name : null;
            $student->fathers_nic = $father ? $father->identity_number : null;
            $student->legal_guardians_name = $guardian ? $guardian->first_name : null;
    
            return $this->_sendResponse(json_encode($student), 200);
        }
        catch (ClientException $e) {
            return $this->_sendResponse("Internal server error", 500);
        }
    }

    /*
        Function that returns the response according to the response data and response code passed.
    */
    private function _sendResponse($response_data, $response_code) {
        return response($response_data, $response_code)->header('Content-Type', 'application/json');
    }
}