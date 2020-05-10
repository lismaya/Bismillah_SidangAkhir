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
              <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Profil Pasien</a></li>
              <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Riwayat Medis</a></li>

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
              <div class="active tab-pane" id="settings" >
                <form id="demo-form2" enctype="multipart/form-data" action="/pasien/registrasiulang" method="post" data-parsley-validate class="form-horizontal form-label-left">
                  @csrf
                  <div class="card-body">
                    <input type="text" name="id_pasien" value="{{$pasien->id}}" hidden>
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

                <!-- The timeline -->
                <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-danger">
                        10 Feb. 2014
                      </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-envelope bg-primary"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                        <div class="timeline-body">
                          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                          weebly ning heekya handango imeem plugg dopplr jibjab, movity
                          jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                          quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-primary btn-sm">Read more</a>
                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-user bg-info"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                        </h3>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-comments bg-warning"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                        <div class="timeline-body">
                          Take me to your leader!
                          Switzerland is small and neutral!
                          We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-success">
                        3 Jan. 2014
                      </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-camera bg-purple"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                        <div class="timeline-body">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <div>
                      <i class="far fa-clock bg-gray"></i>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.tab-pane -->



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
