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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('othername');
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->string('gender');
            $table->string('nation');
            $table->string('state');
            $table->string('town');
            $table->string('class');
            $table->string('branch');
            $table->string('section');
            $table->string('image');
            $table->string('relationship');
            $table->string('guardians_address');
            $table->string('guardians_name');
            $table->string('guardians_email');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
