<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @SWG\Swagger(
 *     basePath="",
 *     schemes={"http"},
 *     host=L5_SWAGGER_CONST_HOST,
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Suraksha API",
 *         description="The `Suraksha API` will connect the `Sri Lanka Insurance Corporation’s (SLIC) system` and `Student Information System (SIS) of Ministry of Education, Sri Lanka` to make the claiming processes easier and accurate. The main Objective of the `Suraksha API` is to provide `SLIC` with necessary information from the `SIS` database and store the claim details in the `SIS` database.",
 *         @SWG\Contact(
 *             email="your-email@domain.com"
 *         ),
 *         @SWG\License(
 *             name="Apache 2.0",
 *             url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *         )
 *     ),
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
