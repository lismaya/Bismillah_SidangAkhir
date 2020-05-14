@extends("layouts.global")
  @section("title") Data Pasien @endsection
    @section("content1")
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h2 class="card-title" ><b>DATA PASIEN</b></h2>
              <br>
              <h3 class="card-title">dr. Naufal Baras, M.Cs.,Sp.A</h3>

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

                  <?php $hariini = new DateTime; ?>

                  @foreach($pasien as $pas)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$pas->nama}}</td>
                  <td>{{$pas->orangtua->nama_ayah}}</td>
                  <td>{{$pas->orangtua->nama_ibu}}</td>
                  <td>{{$pas->jenis_kelamin}}</td>
                  <td>{{$pas->orangtua->alamat}}</td>
                  <td>
                    <?php $tanggal = new DateTime($pas->tanggal_lahir);
                          $today = new DateTime('today');
                          $y=$today->diff($tanggal)->y;
                          $m=$today->diff($tanggal)->m;
                          $d=$today->diff($tanggal)->d;
                     ?>
                    {{$y." Tahun ".$m." Bulan ".$d." Hari "}}
                  </td>
                  <td>
                    <a class="btn btn-info text-white btn-sm" href="/pasien/{{$pas->id}}/detail">Detail</a>

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
