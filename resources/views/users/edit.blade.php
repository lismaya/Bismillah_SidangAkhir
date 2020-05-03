@extends('layouts.global')

@section('title') Edit Pengguna @endsection

@section('content1')

<br>
<div class="row">
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ubah Data Pengguna</h3>
    </div>
    @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}

      </div>
    @endif
    <!-- /.card-header -->
    <!-- form start -->
    <form id="demo-form2" enctype="multipart/form-data" action="{{route('users.update',[$user->id])}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
      <div class="col-sm-6">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nama lengkap" name="name"  value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter tanggal lahir" name="tanggal_lahir" value="{{$user->tanggal_lahir}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <select class="form-control select2" style="width: 100%;" name="jenis_kelamin" value="{{$user->jenis_kelamin}}">
              <option selected="selected">Jenis Kelamin</option>
              <option value="Perempuan">Perempuan</option>
              <option value="Laki-laki">Laki-laki</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nomor Telepon</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter nomor telepon" name="nomor_telephon" value="{{$user->nomor_telephon}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter alamat"  name="alamat" value="{{$user->alamat}}">
          </div>

        </div>

      </div>

      <div class="col-sm-6">
        <div class="card-body">
          <div class="form-group">
            <label for="">Level Pengguna</label>
            <select class="form-control select2" style="width: 100%;" name="level_id">
              <option value="1" @if($user->level_id == '1' ) selected @endif >Administrator</option>
              <option value="2" @if($user->level_id == '2' ) selected @endif>Dokter</option>
              <option value="3" @if($user->level_id == '3' ) selected @endif>Petugas</option>
              <option value="4" @if($user->level_id == '4' ) selected @endif>Apoteker</option>

            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{$user->email}}" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" name="username" value="{{$user->username}}" disabled>
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{$user->password}}" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password Konfirmasi</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password konfirmasi" name="password_confirmation" value="{{$user->password}}">
          </div> -->

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary" value="Save">Ubah</button>
        </div>

      </div>




    </div>
    </form>
  </div>
</div>
</div>



@endsection
