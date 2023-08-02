@extends('home')

@section('konten')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Pelanggan - <strong>TAMBAH DATA</strong>
            </div>
            
            <div class="card-body">
                <a href="/pelanggan" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                
                <form method="post" action="/pelanggan/simpan" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama Pelanggan</label>
                        <input type="text" name="namapelanggan" class="form-control" placeholder="Nama Pelanggan ...">
                        @if($errors->has('namapelanggan'))
                            <div class="text-danger">
                                {{ $errors->first('namapelanggan')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Pelanggan ..."></textarea>
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat')}}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>No. Hp</label>
                        <input type="hp" name="hp" class="form-control" placeholder="No Hp ...">
                        @if($errors->has('hp'))
                            <div class="text-danger">
                                {{ $errors->first('hp')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <b>File Gambar</b><br />
                        <input type="file" name="photo">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection