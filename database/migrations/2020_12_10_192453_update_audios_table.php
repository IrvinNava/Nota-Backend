<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAudiosTable extends Migration
{
    public function up()
    {
        Schema::table('audios', function (Blueprint $table) {
            $table->text('cover')->nullable()->after('descripcion');
            $table->text('thumbnail')->nullable()->after('cover');
            $table->date('fecha_lanzamiento')->nullable()->change();
            $table->string('duracion')->nullable()->change();
        });
    }

    public function down()
    {
        //
    }
}
