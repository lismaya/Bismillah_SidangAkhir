<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
  protected $fillable = ['pasien_id','id_status','tgl_periksa', 'no_urut'];

  public function pasien()
  {
    return $this->belongsTo('App\Pasien');
  }

}
