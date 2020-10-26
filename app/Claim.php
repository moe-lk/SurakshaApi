<?php

namespace App;

use App\Student;

/**
 * @SWG\Definition(required={"id", "incidentDate", "reqestedDate", "enteredDate", "type", "requestedAmount", "paidAmount", "payeeAddress"}, type="object")
 */
class Claim extends Student
{
    /**
     * @SWG\Property(example="SLIC-00000")
     * @var string
     */
    public $id;

    /**
     * @SWG\Property(example="2020-01-15", format="date")
     * @var string
     */
    public $incidentDate;

    /**
     * @SWG\Property(example="2020-01-20", format="date")
     * @var string
     */
    public $reqestedDate;

    /**
     * @SWG\Property(example="2020-01-25", format="date")
     * @var string
     */
    public $enteredDate;

    /**
     * @SWG\Property(example="Residential")
     * @var string
     */
    public $type;

    /**
     * @SWG\Property(example="Claim description - If any")
     * @var string
     */
    public $description;

    /**
     * @SWG\Property(example="100000", format="int64")
     * @var int
     */
    public $requestedAmount;

    /**
     * @SWG\Property(example="100000", format="int64")
     * @var int
     */
    public $paidAmount;

    /**
     * @SWG\Property(example="John Doe")
     * @var string
     */
    public $paymentReceiversName;

    /**
     * @SWG\Property(example="123456789V")
     * @var string
     */
    public $paymentReceiversNIC;

    /**
     * @SWG\Property(example="Example Address, Area.")
     * @var string
     */
    public $payeeAddress;

    /**
     * @SWG\Property(example="0", format="int8")
     * @var int
     */
    public $status;
}
