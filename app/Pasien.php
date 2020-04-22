<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
      protected $fillable = ['id_orangtua','nama','jenis_kelamin', 'tempat_lahir', 'tanggal_lahir'];
}
