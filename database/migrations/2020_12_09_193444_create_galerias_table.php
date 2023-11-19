<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateGaleriasTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->tinyInteger('status');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('autores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->tinyInteger('status');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('galerias', function (Blueprint $table) {
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

        Schema::create('galerias_media', function (Blueprint $table) {
            $table->id();
            $table->text('basename');
            $table->text('path');
            $table->text('thumbnail');
            $table->tinyInteger('type');
            $table->double('size');
            $table->string('mime');
            $table->boolean('optimized');
            $table->boolean('migrated');
            $table->boolean('external');
            $table->tinyInteger('status');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('galerias_autores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('galeria_id')->unsigned();
            $table->bigInteger('autor_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('galeria_id')->references('id')->on('galerias');
            $table->foreign('autor_id')->references('id')->on('autores');
        });

        Schema::create('galerias_media_collection', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('galeria_id')->unsigned();
            $table->bigInteger('media_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('galeria_id')->references('id')->on('galerias');
            $table->foreign('media_id')->references('id')->on('galerias_media');
        });

        Schema::create('galerias_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('galeria_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('galeria_id')->references('id')->on('galerias');
            $table->foreign('tag_id')->references('id')->on('tags');
        });

        Schema::create('galerias_categorias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('galeria_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('galeria_id')->references('id')->on('galerias');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });

        Schema::create('galerias_subcategorias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('galeria_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('subcategoria_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('galeria_id')->references('id')->on('galerias');
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('galerias_subcategorias');
        Schema::dropIfExists('galerias_categorias');
        Schema::dropIfExists('galerias_tags');
        Schema::dropIfExists('galerias_autores');
        Schema::dropIfExists('galerias_media');
        Schema::dropIfExists('galerias');
        Schema::dropIfExists('autores');
        Schema::dropIfExists('tags');
    }
}
