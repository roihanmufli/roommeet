<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id_booking');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_room');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_room')->references('id_room')->on('rooms');
            $table->date('tgl_pinjam');
            $table->time('jam_awal');
            $table->time('jam_akhir');
            $table->string('alasan');
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
        Schema::dropIfExists('bookings');
    }
}
