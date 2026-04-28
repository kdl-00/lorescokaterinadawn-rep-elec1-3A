<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('student_no')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('course');
            $table->string('year_level');
            $table->string('section');
            $table->string('contact_no');
            $table->string('address');
            $table->date('birthdate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
