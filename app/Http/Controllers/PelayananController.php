<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function index($id)
    {
      $pasien = \App\Pasien::findOrFail($id);
      return view("pelayanan", ['pasien'=>$pasien]);
    }

    public function create(Request $request)
    {
      $new_pelayanan = new \App\Pelayanan;

      $new_pelayanan->id_pasien= $request->get('id_pasien');
      $new_pelayanan->id_status= $request->get('id_status');
      $new_pelayanan->tgl_periksa= $request->get('tgl_periksa');
      $new_pelayanan->no_urut= $request->get('no_urut');

      $new_pelayanan->save();

      $id = $new_pelayanan->id;


      return redirect('registrasiulang/'.$id)->with('status','Data Pasien Berhasil Ditambahkan');

    }
}
