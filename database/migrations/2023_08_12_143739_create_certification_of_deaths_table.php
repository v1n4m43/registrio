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
        Schema::create('certification_of_deaths', function (Blueprint $table) {
            $table->id();$table->unsignedBigInteger('deceased_person_id');
            $table->string('attendant_name');
            $table->string('position');
            $table->text('address');
            $table->date('date');
            $table->timestamps();

            $table->foreign('deceased_person_id')->references('id')->on('deceased_persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certification_of_deaths');
    }
};
