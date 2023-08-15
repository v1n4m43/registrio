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
        Schema::create('marriage_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('groom_firstname');
            $table->string('groom_middlename')->nullable();
            $table->string('groom_lastname');
            $table->date('groom_dob');
            $table->unsignedInteger('groom_age');
            $table->string('groom_place_of_birth');
            $table->enum('groom_sex', ['Male', 'Female', 'Other']);
            $table->string('groom_citizenship');
            $table->string('groom_residence');
            $table->string('groom_religion')->nullable();
            $table->string('groom_civil_status');

            // Groom's Parents details
            $table->string('groom_father_firstname');
            $table->string('groom_father_middlename')->nullable();
            $table->string('groom_father_lastname');
            $table->string('groom_father_citizenship');
            $table->string('groom_father_residence');
            $table->string('groom_mother_firstname');
            $table->string('groom_mother_middlename')->nullable();
            $table->string('groom_mother_lastname');
            $table->string('groom_mother_citizenship');
            $table->string('groom_mother_residence');

            // Groom's Parental consent details
            $table->string('groom_parental_consent_advice')->nullable();
            $table->string('groom_relationship')->nullable();
            $table->string('groom_consent_giver_residence')->nullable();

            // Groom's Previous marriage details
            $table->string('groom_previous_marriage_dissolution_method')->nullable();
            $table->string('groom_place_dissolution')->nullable();
            $table->date('groom_date_dissolution')->nullable();
            $table->string('groom_degree_of_relationship')->nullable();

            // Bride details
            $table->string('bride_firstname');
            $table->string('bride_middlename')->nullable();
            $table->string('bride_lastname');
            $table->date('bride_dob');
            $table->unsignedInteger('bride_age');
            $table->string('bride_place_of_birth');
            $table->enum('bride_sex', ['Male', 'Female', 'Other']);
            $table->string('bride_citizenship');
            $table->string('bride_residence');
            $table->string('bride_religion')->nullable();
            $table->string('bride_civil_status');

            // Bride's Parents details
            $table->string('bride_father_firstname');
            $table->string('bride_father_middlename')->nullable();
            $table->string('bride_father_lastname');
            $table->string('bride_father_citizenship');
            $table->string('bride_father_residence');
            $table->string('bride_mother_firstname');
            $table->string('bride_mother_middlename')->nullable();
            $table->string('bride_mother_lastname');
            $table->string('bride_mother_citizenship');
            $table->string('bride_mother_residence');



            // Bride's Parental consent details
            $table->string('bride_parental_consent_advice')->nullable();
            $table->string('bride_relationship')->nullable();
            $table->string('bride_consent_giver_residence')->nullable();

            // Bride's Previous marriage details
            $table->string('bride_previous_marriage_dissolution_method')->nullable();
            $table->string('bride_place_dissolution')->nullable();
            $table->date('bride_date_dissolution')->nullable();
            $table->string('bride_degree_of_relationship')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_licenses');
    }
};
