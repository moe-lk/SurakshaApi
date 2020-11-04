<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"nsid"}, type="object")
 */
class Student extends Model
{
    /**
     * @SWG\Property(example="ABC-123-000")
     * @var string
     */
    public $nsid;

    /**
     * @SWG\Property(example="Example School")
     * @var string
     */
    private $school;

    /**
     * @SWG\Property(example="Example School, Area.")
     * @var string
     */
    private $schoolAddress;

    /**
     * @SWG\Property(example="00000", format="int32")
     * @var int
     */
    public $censusNo;

    /**
     * @SWG\Property(example="J. Smith")
     * @var string
     */
    public $nameWithInitials;

    /**
     * @SWG\Property(example="John Smith")
     * @var string
     */
    public $fullName;

    /**
     * @SWG\Property(example="00000", format="int32")
     * @var int
     */
    public $admissionNo;

    /**
     * @SWG\Property(example="2000-01-15", format="date")
     * @var string
     */
    private $dob;

    /**
     * @SWG\Property(example="Jane Doe")
     * @var string
     */
    public $mothersName;

    /**
     * @SWG\Property(example="123456789V")
     * @var string
     */
    public $mothersNIC;

    /**
     * @SWG\Property(example="John Doe")
     * @var string
     */
    public $fathersName;

    /**
     * @SWG\Property(example="123456789V")
     * @var string
     */
    public $fathersNIC;

    /**
     * @SWG\Property(example="Legal Guardian's name - If any")
     * @var string
     */
    public $guardiansName;
}
