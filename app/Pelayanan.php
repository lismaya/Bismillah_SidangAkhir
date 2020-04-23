<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
  protected $fillable = ['id_pasien','id_status','tgl_periksa', 'no_urut'];

}
