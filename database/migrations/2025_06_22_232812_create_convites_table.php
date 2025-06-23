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
        Schema::create('convites', function (Blueprint $table) {
        $table->id(); // ID gerado automaticamente
        $table->string('token')->unique(); // Token gerado automaticamente
        $table->boolean('confirmado')->default(false);
        $table->dateTime('data_validade')->nullable();
        $table->timestamps();
    });
    }


    public function down(): void
    {
        Schema::dropIfExists('convites');
    }
};
