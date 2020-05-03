@extends('layouts.global')

@section('title') Detail Pengguna @endsection

@section('content1')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{$user->getAvatar()}}"
                   alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{$user->name}}</h3>

            <p class="text-muted text-center">{{$user->level->name}}</p>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tentang Saya</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

            <p class="text-muted">{{$user->alamat}}</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
              <span class="tag tag-danger">UI Design</span>
              <span class="tag tag-success">Coding</span>
              <span class="tag tag-info">Javascript</span>
              <span class="tag tag-warning">PHP</span>
              <span class="tag tag-primary">Node.js</span>
            </p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Detail Profil</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Profil</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            @if(session('status'))
              <div class="toastrDefaultSuccess">
                {{session('status')}}

              </div>
            @endif
            <div class="tab-content">

              <!-- /.tab-pane -->
              <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <div class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-danger">
                      {{$user->created_at}}
                    </span>

                  </div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-user bg-info"></i>

                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Nama Lengkap</a></h3>

                      <div class="timeline-body">
                        {{$user->name}}
                      </div>
                    </div>
                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Jabatan</a></h3>

                      <div class="timeline-body">
                        {{$user->level->name}}
                      </div>
                    </div>
                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Jenis Kelamin</a></h3>

                      <div class="timeline-body">
                        {{$user->jenis_kelamin}}
                      </div>
                    </div>
                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Tanggal Lahir</a></h3>

                      <div class="timeline-body">
                        {{$user->tanggal_lahir}}
                      </div>
                    </div>
                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Email</a></h3>

                      <div class="timeline-body">
                        {{$user->email}}
                      </div>
                    </div>
                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Username</a></h3>

                      <div class="timeline-body">
                        {{$user->username}}
                      </div>
                    </div>
                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Nomor Telepon / HP</a></h3>

                      <div class="timeline-body">
                        {{$user->nomor_telephon}}
                      </div>
                    </div>
                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Alamat</a></h3>

                      <div class="timeline-body">
                        {{$user->alamat}}
                      </div>
                    </div>
                  </div>
                  <div>
                    <i class="far fa-clock bg-gray"></i>
                  </div>

                  <!-- END timeline item -->
                  <!-- timeline item -->

                  <!-- END timeline item -->
                  <!-- timeline item -->

                  <!-- END timeline item -->
                  <!-- timeline time label -->

                  <!-- /.timeline-label -->
                  <!-- timeline item -->

                  <!-- END timeline item -->
                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings" >
                <form class="form-horizontal" enctype="multipart/form-data" action="/user/{{$user->id}}/edit" method="post">
                  @csrf
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" name="name"  value="{{$user->name}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Tanggal Lahir </label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputName" placeholder="Name" name="tanggal_lahir" value="{{$user->tanggal_lahir}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Jenis Kelamin </label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="jenis_kelamin" value="{{$user->jenis_kelamin}}">
                        <option selected="selected">Jenis Kelamin</option>
                        <option value="Perempuan" @if($user->jenis_kelamin == 'Perempuan' ) selected @endif >Perempuan</option>
                        <option value="Laki-laki" @if($user->jenis_kelamin == 'Laki-laki' ) selected @endif >Laki-laki</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nomor Telepon / HP </label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputName" placeholder="Name" name="nomor_telephon" value="{{$user->nomor_telephon}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Alamat </label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat" >{{$user->alamat}}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label"> Jabatan </label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="level_id" >
                        <option value="1" @if($user->level_id == '1' ) selected @endif >Administrator</option>
                        <option value="2" @if($user->level_id == '2' ) selected @endif>Dokter</option>
                        <option value="3" @if($user->level_id == '3' ) selected @endif>Petugas</option>
                        <option value="4" @if($user->level_id == '4' ) selected @endif>Apoteker</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{$user->email}}" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="username" value="{{$user->username}}" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <input type="file" name="avatar" class="form-control">
                    </div>
                  </div>
                  <div class="custom-file">

                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Ubah</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>


@endsection
