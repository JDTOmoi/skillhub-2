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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string("name", 40);
            $table->date("dob");
            $table->tinyInteger("grade");
            $table->string('email')->unique();
            $table->string('phone_number', 20)->unique();
            $table->string('country_of_origin', 32);
            $table->string('school', 64);
            $table->string('photo');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
