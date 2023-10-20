<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->boolean('apto_niños')->default(true)->nullable();
            $table->boolean('estudio')->default(true)->nullable();
            $table->boolean('parqueadero')->default(true)->nullable();
            $table->boolean('lavanderia')->default(true)->nullable();
            $table->boolean('servicios')->default(true)->nullable();
            $table->boolean('piscina')->default(true)->nullable();
            $table->boolean('deposito')->default(true)->nullable();
            $table->boolean('parque')->default(true)->nullable();
            $table->boolean('zona')->default(true)->nullable();
            $table->boolean('colegios')->default(true)->nullable();
            $table->unsignedBigInteger('casa_id')->nullable();
            $table->foreign('casa_id')->references('id')->on('casas')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristicas');
    }
};
