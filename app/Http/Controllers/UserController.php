<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = \App\User::paginate(10);
        return view("users.index", ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.tambah");
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
        $new_user = new \App\User;

        $new_user->name= $request->get('name');
        $new_user->username=$request->get('username');
        $new_user->alamat=$request->get('alamat');
        $new_user->nomor_telephon=$request->get('nomor_telephon');
        $new_user->jenis_kelamin=$request->get('jenis_kelamin');
        $new_user->tanggal_lahir=$request->get('tanggal_lahir');
        $new_user->email=$request->get('email');
        $new_user->level_id=$request->get('level_id');
        $new_user->password=\Hash::make($request->get('password'));

        $new_user->save();

        return redirect()->route('users.index')->with('status','User successfully created.');

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
        $user = \App\User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $user = \App\User::findOrFail($id);

          return view("users.edit", ['user'=>$user]);
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
        $user = \App\User::findOrFail($id);

        $user->name = $request->get('name');
        $user->level_id = $request->get('level_id');
        $user->alamat = $request->get('alamat');
        $user->jenis_kelamin = $request->get('jenis_kelamin');
        $user->tanggal_lahir = $request->get('tanggal_lahir');
        $user->nomor_telephon = $request->get('nomor_telephon');

        $user->save();

        return redirect()->route('users.index',[$id])->with('status', 'Pengguna berhasil diubah');
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
        $user = \App\User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('status'. 'user berhasil dihapus');
    }
    public function editProfile(Request $request, $id)
    {
        //dd($request->all());
      $user = \App\User::findOrFail($id);
    //  $user->update($request->all());


      $user->name = $request->get('name');
      $user->level_id = $request->get('level_id');
      $user->alamat = $request->get('alamat');
      $user->jenis_kelamin = $request->get('jenis_kelamin');
      $user->tanggal_lahir = $request->get('tanggal_lahir');
      $user->nomor_telephon = $request->get('nomor_telephon');
      $user->save();
      if($request->hasFile('avatar')){
        $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
        $user->avatar = $request->file('avatar')->getClientOriginalName();
        $user->save();
      }
       return redirect()->route('users.show',[$id])->with('status', 'Pengguna berhasil diubah');
    }
}
