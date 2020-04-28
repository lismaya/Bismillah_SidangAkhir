<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekammediksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekammediks', function (Blueprint $table) {
            $table->id();
            $table->text('resep_obat');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('lingkar_kepala');
            $table->integer('id_pasien');
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
        Schema::dropIfExists('rekammediks');
    }
}
