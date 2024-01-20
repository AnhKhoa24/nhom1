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
        Schema::create('hocsinhs', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->date('ngaysinh');
            $table->string('gioitinh');
            $table->integer('malop');

            $table->foreign('malop')->references('malop')->on('lophocs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hocsinhs');
    }
};
