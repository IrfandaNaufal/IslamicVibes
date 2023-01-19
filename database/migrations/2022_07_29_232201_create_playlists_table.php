<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('playlist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_playlist');
            $table->text('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('playlist');
    }
};