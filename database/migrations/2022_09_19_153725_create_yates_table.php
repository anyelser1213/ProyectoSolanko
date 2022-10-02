<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->foreign('marca_id')->references('id')->on('marcas_yates')->onDelete('set null');
            $table->unsignedBigInteger('modelo_id')->nullable();
            $table->foreign('modelo_id')->references('id')->on('modelos_yates')->onDelete('set null');
            $table->unsignedBigInteger('tipo_combustible_id')->nullable();
            $table->foreign('tipo_combustible_id')->references('id')->on('tipos_combustibles_yates')->onDelete('set null');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('status_yates')->onDelete('set null');
            
            $table->string('nombre')->unique();

            $table->unsignedBigInteger('usuario_creador_id')->nullable();
            $table->foreign('usuario_creador_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('usuario_poseedor_id')->nullable();
            $table->foreign('usuario_poseedor_id')->references('id')->on('users')->onDelete('set null');
            
            $table->bigInteger('año');
            $table->bigInteger('tamaño');
            $table->decimal('precio', $precision = 8, $scale = 2);

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yates');
    }
}
