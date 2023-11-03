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
        Schema::create('casas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('tipo_oferta');
            $table->string('tipo_inmueble');
            $table->string('estrato');
            $table->text('direccion')->nullable();
            $table->string('departamento');
            $table->string('ciudad');
            $table->text('descripcion');
            $table->string('baños');
            $table->string('parqueaderos');
            $table->string('pisos');
            $table->string('area');
            $table->string('tags')->nullable();

            $table->string('url_3d');
            $table->float('antiguedad');
            // $table->string('img')->nullable();
            //poner habitaciones
            $table->float('latitud')->nullable();
            $table->float('longitud')->nullable();
            $table->integer('status')->nullable();
            $table->string('precio');
            $table->unsignedBigInteger('user_id')->nullable();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            // $table->foreign('') iinvestigar bien como son las referencias en laravel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casas');
    }
};
