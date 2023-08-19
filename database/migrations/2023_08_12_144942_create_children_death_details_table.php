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
        Schema::create('children_death_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deceased_person_id');
            $table->integer('age_of_mother');
            $table->string('method_of_delivery');
            $table->integer('length_of_pregnancy'); // in weeks
            $table->string('type_of_birth');
            $table->string('multiple_birth_child_order')->nullable();
            $table->text('cause_of_death_main_disease')->nullable();
            $table->text('cause_of_death_other_disease')->nullable();
            $table->text('maternal_disease_main')->nullable();
            $table->text('maternal_disease_other')->nullable();
            $table->text('other_relevant_circumstance')->nullable();
            $table->timestamps();

            $table->foreign('deceased_person_id')->references('id')->on('deceased_persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children_death_details');
    }
};
