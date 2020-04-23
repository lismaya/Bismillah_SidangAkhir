<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    //
    public function index($id)
    {
      $ortu = \App\Orangtua::findOrFail($id);
      return view("pendaftaran.tambah_pasien", ['ortu'=>$ortu]);
      // return view('pendaftaran.tambah_pasien');
    }
    public function create(Request $request)
    {
      $new_pasien = new \App\Pasien;

      $new_pasien->id_orangtua= $request->get('id_orangtua');
      $new_pasien->nama= $request->get('nama');
      $new_pasien->jenis_kelamin= $request->get('jenis_kelamin');
      $new_pasien->tempat_lahir= $request->get('tempat_lahir');
      $new_pasien->tanggal_lahir= $request->get('tanggal_lahir');

      $new_pasien->save();
      $id=$new_pasien->id;

      return redirect('pelayanan/'.$id)->with('status','Data Pasien Berhasil Ditambahkan');

    }
}
