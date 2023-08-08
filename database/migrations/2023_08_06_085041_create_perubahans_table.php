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
        Schema::create('perubahans', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('ortu_id');
            $table->string('progress');
            $table->timestamps();

            $table->foreign('ortu_id')->references('id')->on('ortu')->onDelete('Cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perubahans');
    }
};
