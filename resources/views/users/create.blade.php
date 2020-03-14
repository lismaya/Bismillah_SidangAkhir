@extends("layouts.global")
  @section("title") Data Pengguna Aplikasi Sistem Manajemen Klinik Anak  @endsection

  @section("content")
<br>
  <div class="row">
    <div class="col-12">

      <!-- /.card -->

      <div class="card">
        <div class="card-header">
          <h2 class="card-title" ><b>PENGGUNA APLIKASI SISTEM MANAJEMEN KLINIK ANAK</b></h2>
          <br>
          <h3 class="card-title">dr. Naufal Baras, M.Cs.,Sp.A</h3>

        </div>
        <br>

        <div class="col-md-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Pengguna
          </button>
        </div>
        <!-- Button trigger modal -->




        <!-- /.card-header -->
        <div class="card-body">

          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>X</td>
            </tr>

            <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna Aplikasi SiMEKIA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Pengguna</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="demo-form2" action="{{route('users.store')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nama lengkap" name="name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter tanggal lahir" name="tanggal_lahir">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                    <option selected="selected">Alabama</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-laki">Laki-laki</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Level User</label>
                  <input type="text" name="level_id" value="">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Telepon</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter nomor telepon" name="nomor_telephon">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter alamat"  name="alamat">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" name="username">
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
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary" value="Save">Tambah</button>
              </div>
            </form>
          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>







  @endsection
