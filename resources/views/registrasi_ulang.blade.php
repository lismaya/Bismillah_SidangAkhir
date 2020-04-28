@extends("layouts.global")
  @section("title") Registrasi Ulang Pasien @endsection
  @section("judul") Registrasi Ulang Pasien @endsection
  @section("content1")
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title"></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
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
            <input type="text" class="form-control" id="inputBeratbadan" name="berat_badan" placeholder="Berat Badan" >
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
  @endsection
