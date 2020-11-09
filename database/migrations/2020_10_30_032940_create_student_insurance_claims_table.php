<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInsuranceClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_insurance_claims', function (Blueprint $table) {
            $table->string('claim_id');
            $table->string('nsid');
            $table->string('student_name_with_initials');
            $table->string('student_full_name');
            $table->date('student_date_of_birth');
            $table->string('mothers_name');
            $table->string('mothers_nic');
            $table->string('fathers_name');
            $table->string('fathers_nic');
            $table->string('legal_guardians_name');
            $table->date('incident_date');
            $table->date('claim_requested_date');
            $table->date('claim_entered_date');
            $table->string('claim_type');
            $table->text('claim_description');
            $table->decimal('claim_amount_requested');
            $table->decimal('claim_amount_paid');
            $table->string('payment_receivers_name');
            $table->string('payment_receivers_nic');
            $table->text('payee_address');
            $table->integer('claim_status');
            $table->integer('school_census_id');
            $table->string('school_name');
            $table->string('admission_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_insurance_claims');
    }
}
