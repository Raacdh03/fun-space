@extends('home')

@section('konten')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Mobil - <strong>EDIT DATA</strong>
                </div>

                <div class="card-body">
                    <a href="/mobil" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <form method="post" action="/mobil/update/{{ $mobil->idmobil }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <b>File Gambar</b><br />
                            <input type="file" name="photomobil" enctype="multipart/form-data">
                        </div>

                        <div class="form-group">
                            <label>Plat Nomor</label>
                            <input type="text" name="platnomor" class="form-control" placeholder="Plat Nomor ..." value=" {{ $mobil->platnomor }}">
                            @if($errors->has('platnomor'))
                                <div class="text-danger">
                                    {{ $errors->first('platnomor')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" name="merk" class="form-control" placeholder="Merk Mobil ..." value=" {{ $mobil->merk }}">
                            @if($errors->has('merk'))
                                <div class="text-danger">
                                    {{ $errors->first('merk')}}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Type Mobil</label>
                            <input type="text" name="type" class="form-control" placeholder="Type Mobil ..." value=" {{ $mobil->type }}">
                            @if($errors->has('type'))
                                <div class="text-danger">
                                    {{ $errors->first('type')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Warna Mobil</label>
                            <input type="text" name="warna" class="form-control" placeholder="Warna Mobil ..." value=" {{ $mobil->warna }}">
                            @if($errors->has('warna'))
                                <div class="text-danger">
                                    {{ $errors->first('warna')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection