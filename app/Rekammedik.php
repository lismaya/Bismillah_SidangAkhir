<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekammedik extends Model
{
  protected $fillable =['resep_obat','berat_badan','tinggi_badan','lingkar_kepala','pasien_id'];

}
