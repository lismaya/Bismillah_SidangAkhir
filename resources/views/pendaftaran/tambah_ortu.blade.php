@extends("layouts.global")
  @section("title") Tambah Data Orang Tua @endsection


    @section("content1")

    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">   <i class="fas fa-user-cog"></i> Tambah Data Orang Tua</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" id="quickForm" action="/orangtua/tambah" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group ">
                <label for="InputNama">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control {{$errors->has('nama_ayah') ? 'is-invalid' : ''}}" id="InputNama" placeholder="Enter nama ayah" value="{{old('nama_ayah')}}">
                @if($errors->has('nama_ayah'))
                <span class="help-block">{{$errors->first('nama_ayah')}}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="InputNama">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control {{$errors->has('nama_ibu') ? 'is-invalid' : ''}}" id="InputNama" placeholder="Enter nama ibu" value="{{old('nama_ibu')}}">
                @if($errors->has('nama_ibu'))
                <span class="help-block">{{$errors->first('nama_ibu')}}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="InputNama">Nomor Telepon</label>
                <input type="number" name="no_telp" class="form-control" id="InputNama" placeholder="Enter nomor telepon" {{old('no_telp')}}>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control {{$errors->has('alamat') ? 'is-invalid' : ''}}" rows="3" placeholder="Enter ..." >{{old('alamat')}}</textarea>
                @if($errors->has('alamat'))
                <span class="help-block">{{$errors->first('alamat')}}</span>
                @endif
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="InputNama">Email</label>
                <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="InputNama" placeholder="Enter email" value="{{old('email')}}">
                @if($errors->has('email'))
                <span class="help-block">{{$errors->first('email')}}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="InputNama">Username</label>
                <input type="text" name="username" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" id="InputNama" placeholder="Enter Username" value="{{old('username')}}">
                @if($errors->has('username'))
                <span class="help-block">{{$errors->first('username')}}</span>
                @endif
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-success float-right">Simpan</button>

        </div>
      </form>

    </div>

    @endsection
