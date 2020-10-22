<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     *     @SWG\Response(response=400, description="Invalid NSID provided"),
     *     @SWG\Response(response=404, description="Student not found"),
     *     @SWG\Response(response=500, description="Internal server error"),
     *     security={{"api_key": {}}}
     * )
     */
    public function getStudentByNSID(){
    
    }
}
