<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaimController extends Controller
{
    /**
     * @SWG\Post(
     *     path="/api/claim",
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
     *     @SWG\Response(response=405, description="Invalid input"),
     * )
     */
    public function addClaim(){

    }
}
