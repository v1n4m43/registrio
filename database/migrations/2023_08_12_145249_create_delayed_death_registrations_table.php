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
        Schema::create('delayed_death_registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deceased_person_id');
            $table->string('affiant_name');
            $table->text('postal_address');
            $table->date('date_of_death');
            $table->text('address_of_death');
            $table->text('cemetery_address');
            $table->date('date_buried');
            $table->boolean('attended');
            $table->string('attendant_name')->nullable();
            $table->text('cause_of_death');
            $table->text('reason_for_delayed_registration');
            $table->date('affidavit_date');
            $table->text('affiant_address');
            $table->string('affiant_signature')->nullable();
            $table->timestamps();

            $table->foreign('deceased_person_id')->references('id')->on('deceased_persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delayed_death_registrations');
    }
};
