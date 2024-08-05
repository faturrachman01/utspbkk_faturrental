<?php

// database/migrations/2024_08_05_000001_create_cars_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make'); // Merk mobil
            $table->string('model'); // Model mobil
            $table->year('year'); // Tahun pembuatan
            $table->decimal('price_per_day', 8, 2); // Harga per hari
            $table->string('license_plate')->unique(); // Nomor plat
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
