<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Mobil;

class PinjamController extends Controller
{
    public function index()
    {
        $pinjam = Pinjam::all();
        $pelanggan = Pelanggan::all();
        $mobil = Mobil::all();
        
        return view('pinjam', compact('pinjam','pelanggan','mobil'));
    }

    
    public function tambah()
    {
        $pinjam = Pinjam::all();
        $pelanggan = Pelanggan::all();
        $mobil = Mobil::all();
        
        return view('pinjam_tambah', compact('pinjam','pelanggan','mobil'));
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            'idpelanggan' => 'required',
            'idmobil' => 'required',
            'lamapinjam' => 'required'
        ]);
        
        Pinjam::create([
            'idpelanggan' => $request->idpelanggan,
            'idmobil' => $request->idmobil,
            'lamapinjam' => $request->lamapinjam
        ]);
        
        return redirect('/pinjam');
    }

    public function edit($idpinjam)
    {
        $pinjam = Pinjam::find($idpinjam);
        $pelanggan = Pelanggan::all();
        $mobil = Mobil::all();
        
        return view('pinjam_edit', compact('pinjam','pelanggan','mobil'));
    }

    public function update($idpinjam, Request $request)
    {
        $this->validate($request,[
            'idpelanggan' => 'required',
            'idmobil' => 'required',
            'lamapinjam' => 'required'
        ]);
        
        $pinjam = Pinjam::find($idpinjam);
        $pinjam->idpelanggan = $request->idpelanggan;
        $pinjam->idmobil = $request->idmobil;
        $pinjam->lamapinjam = $request->lamapinjam;
        $pinjam->save();
        
        return redirect('/pinjam');
    }

    public function delete($idpinjam)
    {
        $pinjam = Pinjam::find($idpinjam);
        $pinjam->delete();
        
        return redirect('/pinjam');
    }
}


