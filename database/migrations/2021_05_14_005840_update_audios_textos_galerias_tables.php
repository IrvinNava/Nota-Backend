<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAudiosTextosGaleriasTables extends Migration
{

    public function up()
    {
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
        //
    }
}
