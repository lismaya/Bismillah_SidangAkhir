<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendaftaran.tambah_ortu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      //validate
      $this->validate($request,[
          'nama_ayah' => 'required',
          'nama_ibu' =>'required',
          'alamat' => 'required',
          'email' => 'required|email|unique:orangtuas',
          'username' => 'required',
          'password' => 'required'

      ]);

      $new_ortu = new \App\Orangtua;

      $new_ortu->nama_ayah= $request->get('nama_ayah');
      $new_ortu->nama_ibu= $request->get('nama_ibu');
      $new_ortu->alamat=$request->get('alamat');
      $new_ortu->no_telp=$request->get('no_telp');
      $new_ortu->email=$request->get('email');
      $new_ortu->username=$request->get('username');
      $new_ortu->password=\Hash::make($request->get('password'));

      $new_ortu->save();

      $id=$new_ortu->id;
      return redirect('pasien/'.$id)->with('status','Data Orang Tua Berhasil Ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function exo(Request $request)
    {
      print_r($request->input());
    }

    public function dataOrangtua()
    {
      $ortu = \App\Orangtua::all();
      return view('orangtua.data_orangtua',['ortu'=>$ortu]);
    }

    public function detailOrangtua($id)
    {
      $ortu = \App\Orangtua::find($id);
      $anak = \DB::table('pasiens')->where('orangtua_id',$id)->get();
      return view('orangtua.detailortu',['ortu' => $ortu,'anak'=>$anak]);
    }

}
