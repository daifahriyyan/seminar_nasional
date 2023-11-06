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
        Schema::create('pembayarans', function(Blueprint $table){
            $table->id();
            $table->string('user_id');
            $table->string('peserta_id')->nullable();
            $table->string('nominal')->default('Belum Bayar');
            $table->string('seminar');
            $table->enum('metode', ['VA-BNI','VA-BRI','VA-BCA','Spay','TF-BNI'])->nullable();
            $table->string('file');
            $table->enum('status', ['Belum Termasuk', 'Early Bird', 'Gel 1', 'Gel 2'])->default('Belum Termasuk');
            $table->string('keterangan')->default('Belum Dicek dari Panitia');
            $table->string('tiket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
