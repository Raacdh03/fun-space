@extends('home')

@section('konten')
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Mobil
                </div>
                
                <div class="card-body">
                    <a href="/mobil/tambah" class="btn btn-primary">Input Mobil Baru</a>
                    <br/>
                    <br/>
                    
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Photo Mobil</th>
                                <th>Plat Nomor</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Warna</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($mobil as $m)
                            <tr>
                                <td><img src="{{ ('images') }}/{{ $m->photomobil }}" width="200px" style="border-radius:50px;" ></td>
                                <td>{{ $m->platnomor }}</td>
                                <td>{{ $m->merk }}</td>
                                <td>{{ $m->type }}</td>
                                <td>{{ $m->warna }}</td>
                                <td> 
                                    <a href="/mobil/edit/{{ $m->idmobil }}" class="btn btn-warning">Edit</a>
                                    <a href="/mobil/hapus/{{ $m->idmobil }}" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Hapus Data?');">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection