<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('birth_certificate_details', function (Blueprint $table) {
            $table->id();
            $table->string('child_lastname');
            $table->string('child_firstname');
            $table->string('child_middlename');
            $table->string('child_sex');
            $table->date('child_date_of_birth');
            $table->string('child_place_of_barangay_hospitalname');
            $table->string('child_municipality');
            $table->string('child_province');
            $table->string('child_type_of_birth');
            $table->string('child_multiple_birth');
            $table->integer('child_birth_order');
            $table->float('child_weight_at_birth');

            // Mother's maiden name details
            $table->string('mother_lastname');
            $table->string('mother_firstname');
            $table->string('mother_middlename');
            $table->string('mother_citizenship');
            $table->string('mother_religion');
            $table->integer('mother_children_born_alive');
            $table->integer('mother_children_still_living');
            $table->integer('mother_children_born_alive_but_dead');
            $table->string('mother_occupation');
            $table->integer('mother_age');
            $table->string('mother_barangay');
            $table->string('mother_municipality');
            $table->string('mother_province');
            $table->string('mother_country');

            // Father's details
            $table->string('father_lastname');
            $table->string('father_firstname');
            $table->string('father_middlename');
            $table->string('father_citizenship');
            $table->string('father_religion');
            $table->string('father_occupation');
            $table->integer('father_age');
            $table->string('father_barangay');
            $table->string('father_municipality');
            $table->string('father_province');
            $table->string('father_country');

            // Marriage of parents details
            $table->date('parents_marriage_date');
            $table->string('parents_marriage_municipality');
            $table->string('parents_marriage_province');
            $table->string('parents_marriage_country');

            // Certification of informant
            $table->string('informant_signature')->nullable();
            $table->string('informant_name');
            $table->string('informant_relationship');
            $table->string('informant_address');
            $table->date('informant_date');

            // Prepared by
            $table->string('prepared_by_signature')->nullable();
            $table->string('prepared_by_name');
            $table->string('prepared_by_position');
            $table->date('prepared_by_date');

            // Received by
            $table->string('received_by_signature')->nullable();
            $table->string('received_by_name');
            $table->string('received_by_position');
            $table->date('received_by_date');

            // Registered by the civil registrar
            $table->string('registered_by_signature')->nullable();
            $table->string('registered_by_name');
            $table->string('registered_by_position');
            $table->date('registered_by_date');

            // Remarks
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_certificate_details');
    }
};
