@extends('home')

@section('konten')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Mobil - <strong>TAMBAH DATA</strong>
            </div>
            
            <div class="card-body">
                <a href="/mobil" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                
                <form method="post" action="/mobil/simpan" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <b>File Gambar</b><br />
                        <input type="file" name="photomobil">
                    </div>

                    <div class="form-group">
                        <label>Plat Nomor</label>
                        <input type="text" name="platnomor" class="form-control" placeholder="Plat Nomor ...">
                        @if($errors->has('platnomor'))
                            <div class="text-danger">
                                {{ $errors->first('platnomor')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk Mobil ...">
                        @if($errors->has('merk'))
                            <div class="text-danger">
                                {{ $errors->first('merk')}}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Type Mobil</label>
                        <input type="text" name="type" class="form-control" placeholder="Type Mobil ...">
                        @if($errors->has('type'))
                            <div class="text-danger">
                                {{ $errors->first('type')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Warna Mobil</label>
                        <input type="text" name="warna" class="form-control" placeholder="Warna Mobil ...">
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