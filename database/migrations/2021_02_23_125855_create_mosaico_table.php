<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMosaicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosaico_registro', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_visitante');
            $table->bigInteger('edad_visitante')->nullable();
            $table->string('ciudad_residencia')->nullable();
            $table->date('fecha_visita')->nullable();
            $table->string('evento_visita')->nullable();
            $table->string('motivo_visita')->nullable();
            $table->string('nombre_fotografo')->nullable();
            $table->string('detalle_visita')->nullable();
            $table->string('detalle_volviste')->nullable();
            $table->string('volverias')->nullable();
            $table->string('recomendarias')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('mosaico_media', function (Blueprint $table) {
            $table->id();
            $table->text('basename');
            $table->text('path');
            $table->text('thumbnail')->nullable();
            $table->text('url')->nullable();
            $table->tinyInteger('type');
            $table->double('size')->default(0);
            $table->string('mime')->nullable();
            $table->boolean('optimized')->default(0);
            $table->boolean('migrated')->default(0);
            $table->boolean('external')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('mosaico_media_collection', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('registro_id')->unsigned();
            $table->bigInteger('media_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('registro_id')->references('id')->on('mosaico_registro');
            $table->foreign('media_id')->references('id')->on('mosaico_media');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
