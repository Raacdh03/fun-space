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
        Schema::create('tbl_mobil', function (Blueprint $table) {
            $table->integer('idmobil');
            $table->string('platnomor');
            $table->string('merk');
            $table->string('type');
            $table->string('warna');
            $table->string('photomobil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};