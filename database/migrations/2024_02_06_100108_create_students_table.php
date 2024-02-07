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
        Schema::create('students', function (Blueprint $table) {
            $table->id("student_id");
            $table->string('name');
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->unsignedBigInteger('student_type_id');
            $table->string('card_number');
            $table->foreign("student_type_id")->references("student_type_id")->on("student_types");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
