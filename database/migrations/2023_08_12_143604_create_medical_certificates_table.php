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
        Schema::create('medical_certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deceased_person_id');
            $table->string('intermediate_cause')->nullable();
            $table->string('antecedence_cause')->nullable();
            $table->string('underlying_cause')->nullable();
            $table->string('maternal_condition');
            $table->boolean('death_by_external_causes');
            $table->string('manner_of_death');
            $table->string('place_of_occurrence');
            $table->boolean('autopsy');
            $table->string('attendant');
            $table->date('attended_date');
            $table->string('corpse_disposal');
            $table->string('burial_permit');
            $table->date('burial_date_issued');
            $table->string('transfer_permit_number')->nullable();
            $table->date('transfer_date_issued')->nullable();
            $table->string('cemetery_address');
            $table->timestamps();

            $table->foreign('deceased_person_id')->references('id')->on('deceased_persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_certificates');
    }
};
