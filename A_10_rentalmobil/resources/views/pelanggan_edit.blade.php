@extends('home')

@section('konten')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Pelanggan - <strong>EDIT DATA</strong>
                </div>

                <div class="card-body">
                    <a href="/pelanggan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <form method="post" action="/pelanggan/update/{{ $pelanggan->idpelanggan }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="namapelanggan" class="form-control" placeholder="Nama Pelanggan ..." value=" {{ $pelanggan->namapelanggan }}">
                            @if($errors->has('namapelanggan'))
                                <div class="text-danger">
                                    {{ $errors->first('namapelanggan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Pelanggan ..." >{{ $pelanggan->alamat }}</textarea>
                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>No. Hp</label>
                            <input type="text" name="hp" class="form-control" placeholder="No Hp ..." value=" {{ $pelanggan->hp }}">
                            @if($errors->has('hp'))
                                <div class="text-danger">
                                    {{ $errors->first('hp')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <b>File Gambar</b><br />
                            <input type="file" name="photo" value="{{$pelanggan->photo}}">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection