<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenyesuaianTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string("username")->unique();
          $table->enum("jenis_kelamin",["Perempuan","Laki-laki"]);
          $table->string("alamat");
          $table->date("tanggal_lahir");
          $table->string("nomor_telephon");
          $table->string("level_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $table->dropColumn("username");
        $table->dropColumn("jenis_kelamin");
        $table->dropColumn("alamat");
        $table->dropColumn("tanggal_lahir");
        $table->dropColumn("nomor_telephon");
        $table->dropColumn("level_id");

    }
}
