<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTextosTable extends Migration
{
    public function up()
    {
        Schema::create('textos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('cover')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('contenido')->nullable();
            $table->bigInteger('autor_id')->unsigned();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('textos_media', function (Blueprint $table) {
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

        Schema::create('textos_autores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('texto_id')->unsigned();
            $table->bigInteger('autor_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('texto_id')->references('id')->on('textos');
            $table->foreign('autor_id')->references('id')->on('autores');
        });

        Schema::create('textos_media_collection', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('texto_id')->unsigned();
            $table->bigInteger('media_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('texto_id')->references('id')->on('textos');
            $table->foreign('media_id')->references('id')->on('textos_media');
        });

        Schema::create('textos_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('texto_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('texto_id')->references('id')->on('textos');
            $table->foreign('tag_id')->references('id')->on('tags');
        });

        Schema::create('textos_categorias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('texto_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('texto_id')->references('id')->on('textos');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });

        Schema::create('textos_subcategorias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('texto_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('subcategoria_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('texto_id')->references('id')->on('textos');
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('textos');
    }
}
