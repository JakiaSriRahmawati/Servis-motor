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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('merk_motor');
            $table->string('mesin_motor');
            $table->string('seri_motor');
            $table->string('no_plat');
            $table->string('jenis_service');
            $table->date('tgl_booking');
            $table->string('deskripsi');
            $table->string('status');
            $table->timestamps();
        });
    }
    // public function up()
    // {
    //     Schema::create('bookings', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('user_id')->constrained();
    //         $table->string('merk_motor');
    //         $table->string('mesin_motor');
    //         $table->string('seri_motor');
    //         $table->string('no_plat');
    //         $table->string('jenis_service');
    //         $table->date('tgl_booking');
    //         $table->string('deskripsi');
    //         $table->string('status');
    //         $table->timestamps();
    //     });
    // }

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
