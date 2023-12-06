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
        Schema::create('model_barangs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->enum('jenis', ['komputer', 'laptop', 'mouse', 'keyboard', 'headset']);
            $table->integer('qty');
            $table->bigInteger('harga');
            $table->bigInteger('hargatotal');
            $table->bigInteger('diskon');
            $table->bigInteger('total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_barangs');
    }
};
