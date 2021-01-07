<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAjuanPemohonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajuan_pemohon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemohon');
            $table->string('email_pemohon');
            $table->string('no_hp_pemohon');
            $table->string('data_pemohon');
            $table->string('review')->default("belum");
            $table->string('feedback')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('beasiswa_id')->unsigned();
            $table->foreign('beasiswa_id')->references('id')->on('beasiswa')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('ajuan_pemohon');
    }
}
