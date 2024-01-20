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
        Schema::create('lophocs', function (Blueprint $table) {
            $table->integer('malop')->autoIncrement();
            $table->string('tenlop', 50);
            $table->integer('soluong');
            $table->timestamps();
            //
            // $table->primary('malop');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lophocs');
    }
};
