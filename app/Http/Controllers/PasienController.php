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
      $this->validate($request,[
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required'
      ]);
      $new_pasien = new \App\Pasien;

      $new_pasien->orangtua_id= $request->get('orangtua_id');
      $new_pasien->nama= $request->get('nama');
      $new_pasien->jenis_kelamin= $request->get('jenis_kelamin');
      $new_pasien->tempat_lahir= $request->get('tempat_lahir');
      $new_pasien->tanggal_lahir= $request->get('tanggal_lahir');

      $new_pasien->save();
      $id=$new_pasien->id;

      return redirect('pelayanan/'.$id)->with('status','Data Pasien Berhasil Ditambahkan');

    }
    public function dataPasien()
    {
      $pasien = \App\Pasien::all();
      return view("pendaftaran.pasien_lama", ['pasien'=>$pasien]);

    }
    public function semuaDatapasien()
    {
      $pasien = \App\Pasien::all();

      return view("semuadatapasien",['pasien' => $pasien]);
    }

    public function detailPasien($id)
    {
      $pasien = \App\Pasien::find($id);
      return view('pasien.detailpasien',['pasien' =>$pasien]);
    }
    public function daftarPasienhariini()
    {
      return view('pasien.daftarpasienhariini');
    }
}
