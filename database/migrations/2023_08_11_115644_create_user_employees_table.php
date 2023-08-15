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
        Schema::create('user_employees', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename')->nullable(); // Assuming middle name can be optional
            $table->string('suffix')->nullable(); // Assuming suffix can be optional
            $table->text('address');
            $table->string('title'); // For the title/position
            $table->string('phone_number');
            $table->string('employeeId_number');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_employees');
    }
};
