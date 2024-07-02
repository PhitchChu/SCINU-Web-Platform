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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //เก็บชื่อบทความ
            $table->text('content'); //เก็บเนื้อหาบทความ
            $table->boolean('status')->default(true); //เก็บสถานะบทความ
            $table->timestamps(); //เก็บบันทึกข้อมูลเวลาที่สร้างขึ้น
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
