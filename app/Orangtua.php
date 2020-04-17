<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    protected $fillable = ['nama_ayah','nama_ibu', 'alamat', 'no_telp', 'email','username','password'];
}
