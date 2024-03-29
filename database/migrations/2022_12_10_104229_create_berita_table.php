<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->Increments('id', 10);
            $table->integer('idkategori')->unsigned()->nullable();
            $table->foreign('idkategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('iduser')->unsigned()->nullable();
            $table->foreign('iduser')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('judul');
            $table->text('berita');
            $table->enum('carousel', [1, 0])->default(0);
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
