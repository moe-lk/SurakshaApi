<?php

namespace App;

use App\Student;
use Illuminate\Database\Eloquent\Model;


/**
 * @SWG\Definition(required={"id", "incidentDate", "reqestedDate", "enteredDate", "type", "requestedAmount", "paidAmount", "payeeAddress"}, type="object")
 */
class Claim extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'student_insurance_claims';

    /**
     * @SWG\Property(example="SLIC-00000")
     * @var string
     */
    public $claim_id;

    /**
     * @SWG\Property(example="ABC-123-000")
     * @var string
     */
    public $nsid;

    /**
     * @SWG\Property(example="J. Smith")
     * @var string
     */
    public $student_name_with_initials;

    /**
     * @SWG\Property(example="John Smith")
     * @var string
     */
    public $student_full_name;

    /**
     * @SWG\Property(example="2000-01-15", format="date")
     * @var string
     */
    private $student_date_of_birth;

    /**
     * @SWG\Property(example="Jane Doe")
     * @var string
     */
    public $mothers_name;

    /**
     * @SWG\Property(example="123456789V")
     * @var string
     */
    public $mothers_nic;

    /**
     * @SWG\Property(example="John Doe")
     * @var string
     */
    public $fathers_name;

    /**
     * @SWG\Property(example="123456789V")
     * @var string
     */
    public $fathers_nic;

    /**
     * @SWG\Property(example="Legal Guardian's name - If any")
     * @var string
     */
    public $legal_guardians_name;

    /**
     * @SWG\Property(example="2020-01-15", format="date")
     * @var string
     */
    public $incident_date;

    /**
     * @SWG\Property(example="2020-01-20", format="date")
     * @var string
     */
    public $claim_requested_date;

    /**
     * @SWG\Property(example="2020-01-25", format="date")
     * @var string
     */
    public $claim_entered_date;

    /**
     * @SWG\Property(example="Residential")
     * @var string
     */
    public $claim_type;

    /**
     * @SWG\Property(example="Claim description - If any")
     * @var string
     */
    public $claim_description;

    /**
     * @SWG\Property(example="100000", format="int64")
     * @var int
     */
    public $claim_amount_requested;

    /**
     * @SWG\Property(example="100000", format="int64")
     * @var int
     */
    public $claim_amount_paid;

    /**
     * @SWG\Property(example="John Doe")
     * @var string
     */
    public $payment_receivers_name;

    /**
     * @SWG\Property(example="123456789V")
     * @var string
     */
    public $payment_receivers_nic;

    /**
     * @SWG\Property(example="Example Address, Area.")
     * @var string
     */
    public $payee_address;

    /**
     * @SWG\Property(example="0", format="int8")
     * @var int
     */
    public $claim_status;

    /**
     * @SWG\Property(example="00000", format="int32")
     * @var int
     */
    public $school_census_id;

    /**
     * @SWG\Property(example="Example School")
     * @var string
     */
    private $school_name;

    /**
     * @SWG\Property(example="00000", format="int32")
     * @var int
     */
    public $admission_id;
}