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
        Schema::create('autopsies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deceased_person_id');
            $table->text('cause_of_death');
            $table->string('signature')->nullable();
            $table->string('name');
            $table->date('date');
            $table->string('title_designation');
            $table->text('address');
            $table->timestamps();

            $table->foreign('deceased_person_id')->references('id')->on('deceased_persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autopsies');
    }
};
