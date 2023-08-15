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
        Schema::create('affidavit_of_acknowledgements', function (Blueprint $table) {
            $table->id();
            $table->string('affiant_name');
            $table->string('affiant_spouse_name');
            $table->string('affiant_child_name');
            $table->date('affiant_child_birth');
            $table->string('affiant_child_place_of_birth');
            $table->string('father_signature')->nullable();
            $table->string('father_name');
            $table->string('mother_signature')->nullable();
            $table->string('mother_name');
            $table->integer('day');
            $table->string('month');
            $table->integer('year');
            $table->string('community_tax_cert_no');
            $table->date('date_issued');
            $table->string('place_issued');
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
        Schema::dropIfExists('affidavit_of_acknowledgements');
    }
};
