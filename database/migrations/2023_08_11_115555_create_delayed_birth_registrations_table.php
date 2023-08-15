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
        Schema::create('delayed_birth_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('affiant_name');
            $table->string('postal_address');
            $table->string('child_place_of_birth')->nullable();
            $table->date('child_date_of_birth')->nullable();
            $table->string('child_name')->nullable();
            $table->string('attendant_name');
            $table->string('attendant_address');
            $table->string('attendant_citizenship');
            $table->date('date_married')->nullable();
            $table->string('place_married')->nullable();
            $table->string('father_name')->nullable();
            $table->text('reason_delayed_registration');
            $table->string('affiant_spouse')->nullable();
            $table->string('affiant_relationship');
            $table->integer('day');
            $table->string('month');
            $table->integer('year');
            $table->string('municipality_province');
            $table->string('affiant_signature')->nullable();
            $table->string('affiant_printed_name');
            $table->string('community_tax_num');
            $table->date('community_date_issued');
            $table->string('community_place_issued');
            $table->string('admin_officer_signature')->nullable();
            $table->string('admin_officer_name');
            $table->string('admin_officer_position');
            $table->string('admin_officer_address');
            $table->timestamps();

            $table->foreignId('birth_certificate_id')
                ->references('id')
                ->on('birth_certificate_details')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delayed_birth_registrations');
    }
};
