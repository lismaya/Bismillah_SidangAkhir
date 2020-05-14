@extends("layouts.global")
  @section("title") Tambah Pasien @endsection
  @section("judul") Tambah Pasien @endsection

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

                <h3 class="profile-username text-center">{{$ortu->nama_ayah}}</h3>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Orang Tua</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Nama Ibu</strong>

                <p class="text-muted">{{$ortu->nama_ibu}}</p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Nomor Telepon/HP</strong>

                <p class="text-muted">{{$ortu->no_telp}}</p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Email</strong>

                <p class="text-muted">{{$ortu->email}}</p>
                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                <p class="text-muted">{{$ortu->alamat}}</p>

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
                  <li class="nav-item"><a class="nav-link active" href="#dataAnak" data-toggle="tab">Data Anak</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Tambah Data Anak</a></li>
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
                      <div class="tab-pane active" id="dataAnak" >
                        <div class="card-body">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">No.</th>
                                <th>Nama Anak</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $no = 1;?>
                              <?php $tanggal = new DateTime('2002-4-12');
                                    $today = new DateTime('today');
                                    $y=$today->diff($tanggal)->y;

                               ?>
                              @foreach($anak as $a)
                              <tr>
                                <td>{{$no++}}</td>
                                <td>{{$a->nama}}</td>
                                <td>{{$a->jenis_kelamin}}</td>
                                <td>
                                  <?php $tanggal = new DateTime($a->tanggal_lahir);
                                        $today = new DateTime('today');
                                        $y=$today->diff($tanggal)->y;
                                        $m=$today->diff($tanggal)->m;
                                        $d=$today->diff($tanggal)->d;
                                   ?>
                                  {{$y." Tahun ".$m." Bulan ".$d." Hari "}}

                                </td>
                                <td>
                                  <a class="btn btn-info text-white btn-sm" href="/pasien/{{$a->id}}/detail">Detail</a>

                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div class="tab-pane" id="settings" >
                        <form role="form" id="quickForm" action="/orangtua/tambahanak" method="post">
                          @csrf
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-6">

                                  <input type="text" name="orangtua_id" class="form-control" id="InputNama" placeholder="Enter nama anak" value="{{$ortu->id}}" hidden>
                                  <div class="form-group">
                                    <label for="InputNama">Nama </label>
                                    <input type="text" name="nama" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="InputNama" placeholder="Enter nama" value="{{old('nama')}}">
                                    @if($errors->has('nama'))
                                    <span class="help-block">{{$errors->first('nama')}}</span>
                                    @endif
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                                    <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                                      <option selected="selected">Jenis Kelamin</option>
                                      <option value="Perempuan">Perempuan</option>
                                      <option value="Laki-laki">Laki-laki</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="InputNama">Tempat Lahir</label>
                                  <input type="text" name="tempat_lahir" class="form-control {{$errors->has('tempat_lahir') ? 'is-invalid' : ''}}" id="InputNama" placeholder="Enter tempat lahir" {{old('tempat_lahir')}}>
                                  @if($errors->has('tempat_lahir'))
                                  <span class="help-block">{{$errors->first('tempat_lahir')}}</span>
                                  @endif
                                </div>
                                <div class="form-group">
                                  <label for="InputNama">Tanggal Lahir</label>
                                  <input type="date" name="tanggal_lahir" class="form-control {{$errors->has('tanggal_lahir') ? 'is-invalid' : ''}}" id="InputNama" {{old('tanggal_lahir')}}>
                                  @if($errors->has('tanggal_lahir'))
                                  <span class="help-block">{{$errors->first('tanggal_lahir')}}</span>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                          </div>
                        </form>

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

    </div>

    @endsection
