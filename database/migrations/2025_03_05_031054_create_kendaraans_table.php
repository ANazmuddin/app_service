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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->increments('id_kendaraan',11);
            $table->integer('id_jns_kendaraan');
            $table->integer('id_pemilik');
            $table->string('nopol',10);
            $table->string('thn_kendaraan',20);
            $table->string('no_mesin',20);
            $table->string('no_rangka',20);
            $table->string('kapasitas_mesin',20);
            $table->string('transmisi',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
