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
      $this->validate($request,[
        'tgl_periksa' => 'required'
      ]);

      $new_pelayanan = new \App\Pelayanan;

      $new_pelayanan->id_pasien= $request->get('id_pasien');
      $new_pelayanan->id_status= $request->get('id_status');
      $new_pelayanan->tgl_periksa= $request->get('tgl_periksa');
      $new_pelayanan->no_urut= $request->get('no_urut');

      $new_pelayanan->save();

      $id = $new_pelayanan->id_pasien;


      return redirect('registrasi/'.$id)->with('status','Data Pasien Berhasil Ditambahkan');

    }
    public function registrasi($id)
    {
      //return "exo";
      $pasien = \App\Pasien::findOrFail($id);
       return view("registrasi_ulang", ['pasien'=>$pasien]);
      //$pendaftaran_ulang = \App\Rekammedik::findOrFail($id);
    }
    public function registrasiUlang( Request $request)
    {
      $this->validate($request,[
        'berat_badan' => 'required'
      ]);

      $new_rekam_medik_pasien = new \App\Rekammedik;

      $new_rekam_medik_pasien->id_pasien=$request->get('id_pasien');
      $new_rekam_medik_pasien->berat_badan=$request->get('berat_badan');
      $new_rekam_medik_pasien->tinggi_badan=$request->get('tinggi_badan');
      $new_rekam_medik_pasien->lingkar_kepala=$request->get('lingkar_kepala');
      $new_rekam_medik_pasien->save();

      return "berhasil";
    }
}
