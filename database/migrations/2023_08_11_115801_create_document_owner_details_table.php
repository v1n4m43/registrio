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
        Schema::create('document_owner_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id'); // Foreign key to link with the certificate_requests table
            $table->string('document_owner_lastname');
            $table->string('document_owner_firstname');
            $table->string('document_owner_middlename');
            $table->string('document_owner_place_of_birth');
            $table->string('document_owner_municipality');
            $table->string('document_owner_province');
            $table->enum('document_owner_sex', ['Male', 'Female', 'Other']);
            $table->date('document_owner_birthdate');
            $table->string('father_lastname');
            $table->string('father_firstname');
            $table->string('father_middlename');
            $table->string('mother_maiden_lastname');
            $table->string('mother_maiden_firstname');
            $table->string('mother_maiden_middlename');
            $table->timestamps();

            $table->foreign('request_id')->references('id')->on('certificate_requests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_owner_details');
    }
};
