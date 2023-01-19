<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('panduan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_panduan');
            $table->text('slug');
            $table->text('deskripsi_panduan');
            $table->string('gambar_panduan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('panduan');
    }
};