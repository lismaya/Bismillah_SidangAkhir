@extends("layouts.global")
  @section("title") Data Pengguna Aplikasi Sistem Manajemen Klinik Anak  @endsection

    @section("content1")
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pasien</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nama Ayah</th>
                  <th>Nama Ibu</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Umur</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                  <?php $no = 1; ?>
                  @foreach($pasien as $pas)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$pas->nama}}</td>
                  <td>{{$pas->orangtua->nama_ayah}}</td>
                  <td>{{$pas->orangtua->nama_ibu}}</td>
                  <td>{{$pas->jenis_kelamin}}</td>
                  <td>{{$pas->orangtua->alamat}}</td>
                  <td>{{$pas->tanggal_lahir}}</td>
                  <td>
                    <a class="btn btn-info text-white btn-sm" href="#">Detail</a>

                  </td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    @endsection
