<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('textos_media_collection');
        Schema::dropIfExists('textos_media');

        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('object_type');
            $table->bigInteger('object_id');
            $table->text('basename');
            $table->text('path');
            $table->text('thumbnail')->nullable();
            $table->text('url')->nullable();
            $table->tinyInteger('media_type')->default(0);
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

        Schema::create('textos_media_collection', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('texto_id')->unsigned();
            $table->bigInteger('media_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('texto_id')->references('id')->on('textos');
        });

        Schema::table('textos', function (Blueprint $table) {
            $table->text('contenido_markup')->nullable()->after('contenido');
            $table->dropColumn('autor_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('textos_media_collection');
        Schema::dropIfExists('textos_media');
        Schema::dropIfExists('media');
    }
}
