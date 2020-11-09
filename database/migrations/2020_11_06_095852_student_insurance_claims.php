<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentInsuranceClaims extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_insurance_claims', function (Blueprint $table) {
            $table->string('claim_id', 20);
            $table->string('nsid', 12);
            $table->string('student_name_with_initials', 100);
            $table->string('student_full_name', 255);
            $table->date('student_date_of_birth');
            $table->string('mothers_name', 255);
            $table->string('mothers_nic', 12);
            $table->string('fathers_name', 255);
            $table->string('fathers_nic', 12);
            $table->string('legal_guardians_name', 255);
            $table->date('incident_date');
            $table->date('claim_requested_date');
            $table->date('claim_entered_date');
            $table->string('claim_type', 50);
            $table->text('claim_description');
            $table->decimal('claim_amount_requested', 10, 2);
            $table->decimal('claim_amount_paid', 10, 2);
            $table->string('payment_receivers_name', 255);
            $table->string('payment_receivers_nic', 12);
            $table->text('payee_address');
            $table->integer('school_census_id');
            $table->string('school_name', 255);
            $table->string('admission_id', 12);

            $table->unique('claim_id');
            $table->primary(['claim_id', 'nsid']);	
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
