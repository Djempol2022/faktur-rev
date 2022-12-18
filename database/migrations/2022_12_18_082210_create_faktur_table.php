<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nomor_faktur');
            $table->string('nama_nasabah');
            $table->integer('nomor_rangka');
            $table->integer('nomor_mesin');
            $table->foreignId('kabupaten_id')->constrained('kabupaten')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('status_id')->constrained('status')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faktur');
    }
};
