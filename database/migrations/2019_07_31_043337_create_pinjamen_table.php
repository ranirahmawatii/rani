<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjamen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pinjaman');
            $table->unsignedBigInteger('anggotas_id');
            $table->integer('besar_pinjaman');
            $table->date('tgl_pengajuan_pinjaman');
            $table->date('tgl_acc_pinjaman');
            $table->date('tgl_pinjaman');
            $table->date('tgl_pelunasan');
            $table->unsignedBigInteger('angsurans_id');
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
        Schema::dropIfExists('pinjamen');
    }
}
