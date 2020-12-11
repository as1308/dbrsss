<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();
            $table->string('nopasien',10)->references('nopasien')->on('pasin');
            $table->string('kodedokter',10)->references('kodedokter')->on('dokter');
            $table->string('kodepenyakit',10)->references('kodepenyakit')->on('penyakit');
            $table->string('kodepegawai',10)->references('kodepegawai')->on('karyawan');
            $table->string('kodeobat',10)->references('kodeobat')->on('obat');
            $table->date('tglperiksa');
            $table->string('biayadokter',100);
            $table->string('biayadaftar',100);
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
        Schema::dropIfExists('periksa');
    }
}
