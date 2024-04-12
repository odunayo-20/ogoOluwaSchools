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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->string('gender');
            $table->string('state');
            $table->string('lga');
            $table->string('town');
            $table->string('status');
            $table->string('address');
            $table->string('year_employed');
            $table->string('image');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('token')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};