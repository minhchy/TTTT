<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('loai_phuong_tien', function (Blueprint $table) {
            $table->increments('ID_LPT')->first();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loai_phuong_tien', function (Blueprint $table) {
            $table->dropColumn('ID_LPT');
        });
    }
};
