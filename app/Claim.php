<?php

namespace App;

use App\Student;

/**
 * @SWG\Definition(required={"id", "date", "type", "amount", "paymentMethod", "payeeAddress"}, type="object")
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
    public $date;

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
     * @SWG\Property(example="100000", format="int32")
     * @var int
     */
    public $amount;

    /**
     * @SWG\Property(example="Cash")
     * @var string
     */
    public $paymentMethod;

    /**
     * @SWG\Property(example="John Doe")
     * @var string
     */
    public $paymentReceiversName;

    /**
     * @SWG\Property(example="123456789 V")
     * @var string
     */
    public $paymentReceiversNIC;

    /**
     * @SWG\Property(example="Example Address, Area.")
     * @var string
     */
    public $payeeAddress;
}
