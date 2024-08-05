<?php

// database/migrations/2024_08_05_000003_create_rentals_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained()->onDelete('cascade'); // Relasi ke tabel cars
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Relasi ke tabel customers
            $table->date('rental_start'); // Tanggal mulai sewa
            $table->date('rental_end'); // Tanggal akhir sewa
            $table->decimal('total_amount', 8, 2); // Jumlah total sewa
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
