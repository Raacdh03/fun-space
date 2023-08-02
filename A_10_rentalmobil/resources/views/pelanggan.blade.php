@extends('home')

@section('konten')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Pelanggan
            </div>
            
            <div class="card-body">
                <a href="/pelanggan/tambah" class="btn btn-primary">Input Pelanggan Baru</a>
                <br/>
                <br/>
                
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($pelanggan as $pl)
                        <tr>
                            <td>{{ $pl->namapelanggan }}</td>
                            <td>{{ $pl->alamat }}</td>
                            <td>{{ $pl->hp }}</td>
                            <td><img src="{{ ('images') }}/{{ $pl->photo }}" width="200px" style="border-radius:50px;" ></td>
                            <td> 
                                <a href="/pelanggan/edit/{{ $pl->idpelanggan }}" class="btn btn-warning">Edit</a>
                                <a href="/pelanggan/hapus/{{ $pl->idpelanggan }}" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Hapus Data?');">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection