@extends("layouts.global")
  @section("title") Pendaftaran Pemeriksaan @endsection
  @section("judul") Pendaftaran Pemeriksaan @endsection
  @section("content1")
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title"></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="demo-form2" enctype="multipart/form-data" action="/pasien/pemeriksaan" method="post" data-parsley-validate class="form-horizontal form-label-left">
      @csrf
      <div class="card-body">
        <input type="text" name="id_pasien" value="{{$pasien->id}}" hidden>
        <?php $no = 1;?>
        <input type="number" name="no_urut" value="{{$no++}}" hidden>
        <div class="form-group row">
          <label for="nama_pasien" class="col-sm-2 col-form-label">Nama pasien</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_pasien" placeholder="Email" value="{{$pasien->nama}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Password" value="{{$pasien->tempat_lahir}},{{$pasien->tanggal_lahir}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="tgl_periksa" class="col-sm-2 col-form-label">Tanggal Periksa</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="tgl_periksa" placeholder="Tanggal Lahir" name="tgl_periksa" >
          </div>
        </div>
        <div class="form-group row" >
          <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Pelayanan</label>
          <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="id_status">
              <option selected="selected">Jenis Pelayanan</option>
              <option value="1">Pemeriksaan</option>
              <option value="2">Imunisasi</option>
            </select>
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
