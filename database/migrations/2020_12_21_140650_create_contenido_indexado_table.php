<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateContenidoIndexadoTable extends Migration
{
    public function up()
    {
        Schema::create('contenido_indexado', function (Blueprint $table) {
            $table->id();
            $table->string('object_type');
            $table->bigInteger('object_id');
            $table->string('titulo');
            $table->longText('contenido');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes('deleted_at', 0);
        });

        DB::statement('ALTER TABLE contenido_indexado ADD FULLTEXT INDEX contenido (titulo, contenido)');
    }

    public function down()
    {
        Schema::dropIfExists('contenido_indexado');
    }
}
