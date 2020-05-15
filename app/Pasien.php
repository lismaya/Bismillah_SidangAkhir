<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
      protected $fillable = ['orangtua_id','nama','jenis_kelamin', 'tempat_lahir', 'tanggal_lahir'];

      public function orangtua()
      {
        return $this->belongsTo(Orangtua::class);
      }

      public function pelayanan()
      {
        return $this->hasOne('App\Pelayanan');
      }
}
