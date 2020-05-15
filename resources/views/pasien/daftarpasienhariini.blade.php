@extends("layouts.global")
  @section("title") Data Pasien @endsection
    @section("content1")


    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nomor Urut</th>
            <th>Alamat</th>
            <th>Aksi</th>

          </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            @foreach($pasienHariIni as $p)

          <tr>
            <td>{{$no++}}</td>
            <td>{{$p->pasien->nama}}</td>
            <td>{{$p->no_urut}}</td>
            <td>{{$p->pasien->orangtua->alamat}}</td>
            <td>

            </td>
          </tr>
            @endforeach
          </tbody>

        </table>
      </div>
      <!-- /.card-body -->
    </div>

    @endsection
