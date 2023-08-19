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
        Schema::create('received_bies', function (Blueprint $table) {
            $table->id();$table->unsignedBigInteger('deceased_person_id');
            $table->string('receiver_name');
            $table->string('relationship');
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
        Schema::dropIfExists('received_bies');
    }
};
