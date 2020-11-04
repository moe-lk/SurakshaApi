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
    private $nsid;

    /**
     * @SWG\Property(example="J. Smith")
     * @var string
     */
    private $student_name_with_initials;

    /**
     * @SWG\Property(example="John Smith")
     * @var string
     */
    private $student_full_name;

    /**
     * @SWG\Property(example="2000-01-15", format="date")
     * @var string
     */
    private $student_date_of_birth;

    /**
     * @SWG\Property(example="00000", format="int32")
     * @var int
     */
    private $school_census_id;

    /**
     * @SWG\Property(example="Example School")
     * @var string
     */
    private $school_name;

    /**
     * @SWG\Property(example="Example School, Area.")
     * @var string
     */
    private $school_address;

    /**
     * @SWG\Property(example="00000", format="int32")
     * @var int
     */
    private $student_admission_id;

    /**
     * @SWG\Property(example="Jane Doe")
     * @var string
     */
    private $mothers_name;

    /**
     * @SWG\Property(example="123456789V")
     * @var string
     */
    private $mothers_nic;

    /**
     * @SWG\Property(example="John Doe")
     * @var string
     */
    private $fathers_name;

    /**
     * @SWG\Property(example="123456789V")
     * @var string
     */
    private $fathers_nic;

    /**
     * @SWG\Property(example="Legal Guardian's name - If any")
     * @var string
     */
    private $legal_guardians_name;
}
