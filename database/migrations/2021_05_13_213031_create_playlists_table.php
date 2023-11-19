<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsTable extends Migration
{

    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->text('descripción_corta')->nullable();
            $table->text('descripcion_larga')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->text('cover')->nullable();
            $table->text('thumbnail')->nullable();
            $table->tinyInteger('orden');
            $table->tinyInteger('status');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        Schema::table('galerias', function (Blueprint $table) {
            $table->bigInteger('playlist_id')->unsigned()->nullable()->after('tipo_contenido');
        });

        Schema::table('audios', function (Blueprint $table) {
            $table->bigInteger('playlist_id')->unsigned()->nullable()->after('tipo_contenido');
        });

        Schema::table('textos', function (Blueprint $table) {
            $table->bigInteger('playlist_id')->unsigned()->nullable()->after('contenido_markup');
        });

    }

    public function down()
    {
        Schema::dropIfExists('playlists');
    }
}
