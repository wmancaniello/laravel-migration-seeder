<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     CREATE TABLE `trains` (

        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `company` VARCHAR(255) NOT NULL,
        `departure_station` VARCHAR(255) NOT NULL,
        `arrival_station` VARCHAR(255) NOT NULL,
        `departure_time` DATETIME NOT NULL,
        `arrival_time` DATETIME NOT NULL,
        `train_code` VARCHAR(50) NOT NULL,
        `number_of_carriages` INT NOT NULL,
        `on_time` BOOLEAN NOT NULL DEFAULT TRUE,
        `cancelled` BOOLEAN NOT NULL DEFAULT FALSE

        );

     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code');
            $table->integer('number_of_carriages');
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
