@extends('home')

@section('konten')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Pinjam
            </div>
            
            <div class="card-body">
                <a href="/pinjam/tambah" class="btn btn-primary">Input Peminjam Baru</a>
                <br/>
                <br/>
                
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id Pinjam</th>
                            <th>Id Pelanggan</th>
                            <th>Id Mobil</th>
                            <th>Lama Pinjam</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($pinjam as $pn)
                        <tr>
                            <td>{{ $pn->idpinjam }}</td>
                            <td>{{ $pn->Pelanggan->namapelanggan ?? 'Default' }}</td>
                            <td>{{ $pn->Mobil->merk ?? 'Default' }}</td>
                            <td>{{ $pn->lamapinjam }}</td>
                            <td> 
                                <a href="/pinjam/edit/{{ $pn->idpinjam }}" class="btn btn-warning">Edit</a>
                                <a href="/pinjam/hapus/{{ $pn->idpinjam }}" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Hapus Data?');">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection