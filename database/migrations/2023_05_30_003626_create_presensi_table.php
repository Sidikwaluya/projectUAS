<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('tanggal_presensi');
            $table->string('nama_mhs');
            $table->integer('nim_mhs');
            $table->string('prodi_mhs');
            $table->string('status_kehadiran');
            $table->unique(array('nim_mhs'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
};
