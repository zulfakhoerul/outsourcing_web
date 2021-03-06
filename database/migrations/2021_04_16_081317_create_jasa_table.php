<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa', function (Blueprint $table) {
            $table->id('id_jasa');
            $table->foreignId('id_outsourcing');
            $table->foreignId('id_jenisJasa');
            $table->string('nama_jasa');
            $table->string('foto_profil')->nullable();
            $table->timestamps();

            $table->foreign('id_outsourcing')->references('id_outsourcing')->on('outsourcing');
            $table->foreign('id_jenisJasa')->references('id_jenisJasa')->on('jenis_jasa');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jasa');
    }
}
