<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChiTietDonNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_don_nhaps', function(Blueprint $table)
        {
            $table->timestamps();
            $table->string('id_hh')->nullable();
            $table->string('id_nh')->nullable();
            $table->string('soluong_ctdn')->nullable();
            $table->string('dongia_ctdn')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chi_tiet_don_nhaps');
    }
}
