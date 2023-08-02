@extends('home')

@section('konten')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Pinjam - <strong>EDIT DATA</strong>
                </div>

                <div class="card-body">
                    <a href="/pinjam" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <form method="post" action="/pinjam/update/{{ $pinjam->idpinjam }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <select name="idpelanggan" class="form-control">
                                @foreach($pelanggan as $p)
                                <option value="{{ $p->idpelanggan }}" {{ $pinjam->pelanggan->idpelanggan == $p->idpelanggan ? 'selected' : '' }}>{{ $p->namapelanggan }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Merk Mobil</label>
                            <select name="idmobil" class="form-control">
                                @foreach($mobil as $m)
                                <option value="{{ $m->idmobil }}" {{ $pinjam->mobil->idmobil == $m->idmobil ? 'selected' : '' }}>{{ $m->merk }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Lama Pinjam</label>
                            <input type="text" name="lamapinjam" class="form-control" placeholder="Lama Pinjam ..." value=" {{ $pinjam->lamapinjam }}">
                            @if($errors->has('lamapinjam'))
                                <div class="text-danger">
                                    {{ $errors->first('lamapinjam')}}
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