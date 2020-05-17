@extends("layouts.global")
  @section("title") Registrasi Ulang Pasien @endsection
  @section("content1")
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{asset('images/default.jpg')}}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{$pasien->nama}}</h3>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Pasien</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-map-marker-alt mr-1"></i> Jenis Kelamin</strong>

              <p class="text-muted">{{$pasien->jenis_kelamin}}</p>
              <hr>
              <strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat /Tanggal Lahir</strong>

              <p class="text-muted">{{$pasien->tempat_lahir}} / {{$pasien->tanggal_lahir}}</p>
              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

              <p class="text-muted">exoooo</p>

              <hr>
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
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Registrasi Ulang Pasien</a></li>
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

                  <!-- The timeline -->

                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings" >
                  <form id="demo-form2" enctype="multipart/form-data" action="/pasien/registrasiulang" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                    <div class="card-body">
                      <input type="text" name="pasien_id" value="{{$pasien->id}}" hidden>
                      <div class="form-group row">
                        <label for="nama_pasien" class="col-sm-2 col-form-label">Nama pasien</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nama_pasien" placeholder="Email" value="{{$pasien->nama}}" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword3" placeholder="Password" value="{{$pasien->tempat_lahir}},{{$pasien->tanggal_lahir}}" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tampiljenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="tampiljenisKelamin" placeholder="Password" value="{{$pasien->jenis_kelamin}}" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputBeratbadan" class="col-sm-2 col-form-label">Berat Badan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control {{$errors->has('berat_badan') ? 'is-invalid' : ''}}" id="inputBeratbadan" name="berat_badan" placeholder="Berat Badan" >
                          @if($errors->has('berat_badan'))
                          <span class="help-block">{{$errors->first('berat_badan')}}</span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputBeratbadan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputBeratbadan" name="tinggi_badan" placeholder="Tinggi Badan" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputBeratbadan" class="col-sm-2 col-form-label">Lingkar Kepala</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputBeratbadan" name="lingkar_kepala" placeholder="Lingkar Kepala" >
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                    <!-- /.card-footer -->
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
