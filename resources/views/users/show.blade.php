@extends('layouts.global')

@section('title') Detail Pengguna @endsection

@section('content1')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Detail Pengguna</h1>
      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="card card-primary card-outline">
  <div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle"
           src="{{url('assets/dist/img/user4-128x128.jpg')}}"
           alt="User profile picture">
    </div>

    <h3 class="profile-username text-center">{{$user->name}}</h3>

    <p class="text-muted text-center">{{$user->level_id}}</p>

    <div class="row">
      <div class="col-sm-6">
        <div class="card-body">

          <ul class="list-group list-group-unbordered mb-3">

            <li class="list-group-item">
              <b>Email</b>
              <a class="float-right">{{$user->email}}</a>
            </li>
            <li class="list-group-item">
              <b>Jenis Kelamin</b>
              <a class="float-right">{{$user->jenis_kelamin}}</a>
            </li>


          </ul>

        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-body">
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Nomor Telepon</b>
                <a class="float-right">{{$user->nomor_telephon}}</a>
              </li>

              <li class="list-group-item">
                <b>Alamat</b>
                <a class="float-right">{{$user->alamat}}</a>
              </li>
              
            </ul>

        </div>
      </div>
    </div>

  </div>
  <!-- /.card-body -->
</div>

@endsection
