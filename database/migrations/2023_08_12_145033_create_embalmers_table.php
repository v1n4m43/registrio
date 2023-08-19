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
        Schema::create('embalmers', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('deceased_person_id');
            $table->string('signature')->nullable();
            $table->string('name');
            $table->text('address');
            $table->string('designation');
            $table->string('license_number');
            $table->date('issued_on');
            $table->date('expiry_date');
            $table->timestamps();

            $table->foreign('deceased_person_id')->references('id')->on('deceased_persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('embalmers');
    }
};
