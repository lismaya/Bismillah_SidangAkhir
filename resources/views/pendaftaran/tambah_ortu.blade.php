@extends("layouts.global")
  @section("title") Tambah Data Orang Tua @endsection
  @section("judul") Tambah Data Orang Tua @endsection

    @section("content1")
    <div class="invoice p-3 mb-3">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h4>
            <i class="fas fa-user-cog"></i> Orang Tua
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

        <form role="form" id="quickForm" action="/orangtua/tambah" method="post">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="InputNama">Nama Ayah</label>
                  <input type="text" name="nama_ayah" class="form-control" id="InputNama" placeholder="Enter nama ayah">
                </div>
                <div class="form-group">
                  <label for="InputNama">Nama Ibu</label>
                  <input type="text" name="nama_ibu" class="form-control" id="InputNama" placeholder="Enter nama ibu">
                </div>
                <div class="form-group">
                  <label for="InputNama">Nomor Telepon</label>
                  <input type="number" name="no_telp" class="form-control" id="InputNama" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="InputNama">Alamat</label>
                  <textarea name="alamat" rows="3" cols="43"></textarea>
                </div>
              </div>
              <div class="col-sm-6">

                <div class="form-group">
                  <label for="InputNama">Email</label>
                  <input type="email" name="email" class="form-control" id="InputNama" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="InputNama">Username</label>
                  <input type="text" name="username" class="form-control" id="InputNama" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password Konfirmasi</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password konfirmasi" name="password_confirmation">
                </div>
              </div>
            </div>


            <div class="form-group mb-0">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
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
