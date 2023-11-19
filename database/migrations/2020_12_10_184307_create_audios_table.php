<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAudiosTable extends Migration
{
    public function up()
    {
        Schema::create('audios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->tinyInteger('tipo_contenido');
            $table->date('fecha_lanzamiento');
            $table->string('duracion');
            $table->tinyInteger('status');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('audios_media', function (Blueprint $table) {
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

        Schema::create('audios_autores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_id')->unsigned();
            $table->bigInteger('autor_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('audio_id')->references('id')->on('audios');
            $table->foreign('autor_id')->references('id')->on('autores');
        });

        Schema::create('audios_media_collection', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_id')->unsigned();
            $table->bigInteger('media_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('audio_id')->references('id')->on('audios');
            $table->foreign('media_id')->references('id')->on('audios_media');
        });

        Schema::create('audios_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('audio_id')->references('id')->on('audios');
            $table->foreign('tag_id')->references('id')->on('tags');
        });

        Schema::create('audios_categorias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('audio_id')->references('id')->on('audios');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });

        Schema::create('audios_subcategorias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('subcategoria_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('audio_id')->references('id')->on('audios');
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });

        Schema::table('galerias_media', function (Blueprint $table) {
            $table->text('thumbnail')->nullable()->change();
            $table->text('url')->nullable()->after('thumbnail');
            $table->string('mime')->nullable()->change();
            $table->boolean('optimized')->default(0)->change();
            $table->boolean('migrated')->default(0)->change();
            $table->boolean('external')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::dropIfExists('audios_subcategorias');
        Schema::dropIfExists('audios_categorias');
        Schema::dropIfExists('audios_tags');
        Schema::dropIfExists('audios_media_collection');
        Schema::dropIfExists('audios_autores');
        Schema::dropIfExists('audios_media');
        Schema::dropIfExists('audios');
    }
}
