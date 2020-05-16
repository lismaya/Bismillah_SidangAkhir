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
                  <th>Nomor Urut</th>
                  <th>Nama Pasien</th>
                  <th>Umur</th>
                  <th>Alamat</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($pasienHariIni as $p)
                <tr>
                  <td>{{$p->no_urut}}</td>
                  <td>{{$p->pasien->nama}}</td>
                  <td>
                    <?php $tanggal = new DateTime($p->pasien->tanggal_lahir);
                          $today = new DateTime('today');
                          $y=$today->diff($tanggal)->y;
                          $m=$today->diff($tanggal)->m;
                          $d=$today->diff($tanggal)->d;
                     ?>
                    {{$y." Tahun ".$m." Bulan ".$d." Hari "}}
                  </td>
                  <td>{{$p->pasien->orangtua->alamat}}</td>
                  <td>


                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option> <span class="badge badge-success">Belum Datang</span></option>
                        <option>Dalam Antrian</option>
                        <option>Dalam Pemeriksaan</option>
                      </select>

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
