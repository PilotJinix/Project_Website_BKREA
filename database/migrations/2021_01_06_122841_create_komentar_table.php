<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('komentar');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('beasiswa_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('ajuan_pemohon')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('beasiswa_id')->references('beasiswa_id')->on('ajuan_pemohon')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('komentar');
    }
}
