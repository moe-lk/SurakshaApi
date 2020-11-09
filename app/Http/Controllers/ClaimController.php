<?php

namespace App\Http\Controllers;

use App\Claim;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ClaimController extends Controller
{
    /**
     * @SWG\Post(
     *     path="/api/claim/add",
     *     tags={"claim"},
     *     operationId="addClaim",
     *     summary="Add a new claim to the system",
     *     description="",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="Claim object that needs to be added to the system",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/Claim"),
     *     ),
     *     @SWG\Response(response=200, description="Claim added successfully", @SWG\Schema(ref="#/definitions/Claim")),
     *     @SWG\Response(response=405, description="Failed to add the claim"),
     * )
     */
    public function addClaim(Request $request){
        $claim = new Claim();

        $claim->claim_id = $request->input('claim_id');
        $claim->nsid = $request->input('nsid');
        $claim->student_name_with_initials = $request->input('student_name_with_initials');
        $claim->student_full_name = $request->input('student_full_name');
        $claim->student_date_of_birth = $request->input('student_date_of_birth');
        $claim->mothers_name = $request->input('mothers_name');
        $claim->mothers_nic = $request->input('mothers_nic');
        $claim->fathers_name = $request->input('fathers_name');
        $claim->fathers_nic = $request->input('fathers_nic');
        $claim->legal_guardians_name = $request->input('legal_guardians_name');
        $claim->incident_date = $request->input('incident_date');
        $claim->claim_requested_date = $request->input('claim_requested_date');
        $claim->claim_entered_date = $request->input('claim_entered_date');
        $claim->claim_type = $request->input('claim_type');
        $claim->claim_description = $request->input('claim_description');
        $claim->claim_amount_requested = $request->input('claim_amount_requested');
        $claim->claim_amount_paid = $request->input('claim_amount_paid');
        $claim->payment_receivers_name = $request->input('payment_receivers_name');
        $claim->payment_receivers_nic = $request->input('payment_receivers_nic');
        $claim->payee_address = $request->input('payee_address');
        $claim->school_census_id = $request->input('school_census_id');
        $claim->school_name = $request->input('school_name');
        $claim->admission_id = $request->input('admission_id');

        try {
            $result = $claim->save();

            if($result == 1) {
                return $this->_sendResponse("Claim added successfully", 200);
            }
            else {
                return $this->_sendResponse("Failed to add the claim", 405);
            }
        }
        catch (QueryException $qe) {
            return $this->_sendResponse("Failed to add the claim", 405);
        }
    }


    /*
        Function that returns the response according to the response data and response code passed.
    */
    private function _sendResponse($response_data, $response_code) {
        return response($response_data, $response_code)->header('Content-Type', 'application/json');
    }
}
