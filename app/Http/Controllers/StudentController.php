<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use \GuzzleHttp\Exception\ClientException;
use \stdClass;

class StudentController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/student{nsid}",
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
            $student = DB::table('security_users')->where('openemis_no', $nsid)->first();
    
            if(!$student) return $this->_sendResponse("Invalid NSID provided or Student not found", 404);
    
            $institution_student = DB::table('institution_students')->where('student_id', 93)->first();
            $institution = DB::table('institutions')->where('id', $institution_student->institution_id)->first();                  
    
            $student_data = new stdClass();
    
            $student_data->nsid = $nsid;
            $student_data->school = $institution->name;
            $student_data->schoolAddress = $institution->address;
            $student_data->censusNo = $institution->code;
            $student_data->nameWithInitials = $student->last_name;
            $student_data->fullName = $student->first_name;
            $student_data->admissionNo = $institution_student->admission_id;
            $student_data->dob = $student->date_of_birth;
            $student_data->mothersName = null;
            $student_data->mothersNIC = null;
            $student_data->fathersName = null;
            $student_data->fathersNIC = null;
            $student_data->guardiansName = null;
    
            return $this->_sendResponse(json_encode($student_data), 200);
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