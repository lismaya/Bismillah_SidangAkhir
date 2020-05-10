@extends("layouts.global")
  @section("title") Data Pasien @endsection
    @section("content1")
    <div class="card">
      <div class="card-header">
        <h1 class="card-title"><b>DATA ORANG TUA PASIEN</b></h1>
        <br>
        <h3 class="card-title">dr. Naufal Baras, M.Cs.,Sp.A</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No.</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>No. Telp / No. Hp</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            @foreach($ortu as $or)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$or->nama_ayah}}</td>
            <td>{{$or->nama_ibu}}</td>
            <td>{{$or->no_telp}}</td>
            <td>{{$or->alamat}}</td>

            <td>
              <a class="btn btn-info text-white btn-sm" href="/orangtua/{{$or->id}}/detail">Detail</a>
              <a class="btn btn-danger text-white btn-sm" href="#">Hapus</a>

            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    @endsection
