@extends("layouts.global")
  @section("title") Tambah Pasien @endsection
  @section("judul") Tambah Pasien @endsection

    @section("content1")
    <div class="callout callout-info">
      <h5><i class="fas fa-info"></i> Data Orang Tua:</h5>
      nama ayah : {{$ortu->nama_ayah}} <br>
      nama ibu  : {{$ortu->nama_ibu}}
    </div>

    <div class="invoice p-3 mb-3">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h4>
            <i class="fas fa-user-cog"></i> Pasien
            <small class="float-right"><?php echo date('Y-m-d H:i:s'); ?></small>
          </h4>
        </div>
        <!-- /.col -->
      </div>
      @if(session('status'))
        <div class="alert alert-success">
          {{session('status')}}

        </div>
      @endif

        <form role="form" id="quickForm" action="/pasien/tambah" method="post">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">

                  <input type="text" name="id_orangtua" class="form-control" id="InputNama" placeholder="Enter nama ayah" value="{{$ortu->id}}" hidden>
                  <div class="form-group">
                    <label for="InputNama">Nama </label>
                    <input type="text" name="nama" class="form-control" id="InputNama" placeholder="Enter nama ayah">
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
                  <input type="text" name="tempat_lahir" class="form-control" id="InputNama" placeholder="Enter tempat lahir">
                </div>
                <div class="form-group">
                  <label for="InputNama">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" id="InputNama" >
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>


      <!-- info row -->

      <!-- this row will not appear when printing -->

    </div>

    @endsection
