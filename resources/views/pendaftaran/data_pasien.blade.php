@extends("layouts.global")
  @section("title") Data Pengguna Aplikasi Sistem Manajemen Klinik Anak  @endsection

    @section("content1")
    <div class="row">
      <div class="col-12">

        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h2 class="card-title" ><b>PENGGUNA APLIKASI SISTEM MANAJEMEN KLINIK ANAK</b></h2>
            <br>
            <h3 class="card-title">dr. Naufal Baras, M.Cs.,Sp.A</h3>

          </div>
          @if(session('status'))
            <div class="alert alert-success">
              {{session('status')}}

            </div>
          @endif
          <br>

          <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
              Tambah Pengguna
            </button>
          </div>
          <!-- Button trigger modal -->




          <!-- /.card-header -->
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">

              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php $no = 1;?>

              <tr>
              <td></td>
              <td></td>
              </tr>
              


            </table>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- Modal -->

</div>
</div>
</div>


    @endsection
