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
        Schema::create('administering_officers', function (Blueprint $table) {
            $table->id(); 
            $table->date('administering_date');
            $table->text('address');
            $table->date('issued_on');
            $table->text('issued_at');
            $table->string('officer_name');
            $table->string('signature')->nullable();
            $table->string('position');
            $table->text('officer_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administering_officers');
    }
};
