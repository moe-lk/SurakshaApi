<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * @SWG\Get(
     *   path="/api/search-student",
     *   tags={"admins"},
     *   summary="Get student details for the claim",
     *   operationId="searchStudent",
     *   @SWG\Response(response=200, description="Student found"),
     *   @SWG\Response(response=404, description="Student not found"),
     *   @SWG\Response(response=406, description="Invalid NSID"),
     *   @SWG\Response(response=500, description="Internal server error"),
	 *		@SWG\Parameter(
     *          in="path",
     *          name="nsid",
     *          required=true, 
     *          type="string" 
     *      ),
     * )
     *
     */
    public function searchStudent(Request $request){
        echo $request->nsid;
    }
}
