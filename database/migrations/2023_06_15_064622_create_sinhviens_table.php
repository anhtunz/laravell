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
        Schema::create('sinhviens', function (Blueprint $table) {
            $table->id();
            $table->string('MaSV');
            $table->string('Email');
            $table->string('Lop');
            $table->string('Gioitinh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinhviens');
    }
};