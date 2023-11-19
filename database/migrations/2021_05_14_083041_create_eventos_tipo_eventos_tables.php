<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTipoEventosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->tinyInteger('status');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('eventos_tipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->tinyInteger('status');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('textos_eventos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('texto_id')->unsigned();
            $table->bigInteger('evento_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('texto_id')->references('id')->on('textos');
            $table->foreign('evento_id')->references('id')->on('eventos');
        });

        Schema::create('textos_eventos_tipos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('texto_id')->unsigned();
            $table->bigInteger('evento_tipo_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('texto_id')->references('id')->on('textos');
            $table->foreign('evento_tipo_id')->references('id')->on('eventos_tipos');
        });

        Schema::create('galerias_eventos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('galeria_id')->unsigned();
            $table->bigInteger('evento_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('galeria_id')->references('id')->on('galerias');
            $table->foreign('evento_id')->references('id')->on('eventos');
        });

        Schema::create('galerias_eventos_tipos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('galeria_id')->unsigned();
            $table->bigInteger('evento_tipo_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('galeria_id')->references('id')->on('galerias');
            $table->foreign('evento_tipo_id')->references('id')->on('eventos_tipos');
        });

        Schema::create('audios_eventos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_id')->unsigned();
            $table->bigInteger('evento_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('audio_id')->references('id')->on('audios');
            $table->foreign('evento_id')->references('id')->on('eventos');
        });

        Schema::create('audios_eventos_tipos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_id')->unsigned();
            $table->bigInteger('evento_tipo_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('audio_id')->references('id')->on('audios');
            $table->foreign('evento_tipo_id')->references('id')->on('eventos_tipos');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
        Schema::dropIfExists('eventos_tipos');
        Schema::dropIfExists('textos_eventos');
        Schema::dropIfExists('textos_eventos_tipos');
        Schema::dropIfExists('galerias_eventos');
        Schema::dropIfExists('galerias_eventos_tipos');
        Schema::dropIfExists('audios_eventos');
        Schema::dropIfExists('audios_eventos_tipos');
    }
}
