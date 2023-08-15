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
        Schema::create('requester_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id'); // Foreign key to link with the certificate_requests table
            $table->string('requester_lastname');
            $table->string('requester_firstname');
            $table->string('requester_middlename');
            $table->string('requester_email')->nullable();
            $table->unsignedBigInteger('requester_phone_number');
            $table->string('requester_barangay');
            $table->string('requester_municipality');
            $table->string('requester_province');
            $table->string('requester_country');
            $table->unsignedBigInteger('requester_postal'); // Use unsignedBigInteger for postal code
            $table->string('requester_id_picture_path'); // Store the path to the image, not the image itself
            $table->string('requester_government_id_number'); // Use string for government ID number
            $table->timestamps();

            $table->foreign('request_id')->references('id')->on('certificate_requests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requester_details');
    }
};
