<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        
        return view('pelanggan', ['pelanggan' => $pelanggan]);
    }

    public function tambah()
    {
        return view('pelanggan_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            'namapelanggan' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'photo' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        
        $file = $request->file('photo');
        $namafile = time() . "_" . $file->getClientOriginalName();

        $tujuanupload = 'images';
        $file->move($tujuanupload, $namafile);

        Pelanggan::create([
            'namapelanggan' => $request->namapelanggan,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'photo' => $file->getClientOriginalName()
        ]);
        
        return redirect('/pelanggan');
    }

    public function edit($idpelanggan)
    {
        $pelanggan = Pelanggan::find($idpelanggan);
        return view('pelanggan_edit', ['pelanggan' => $pelanggan]);
    }

    public function update($idpelanggan, Request $request)
    {
        $this->validate($request,[
            'namapelanggan' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'photo' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        
        $pelanggan = Pelanggan::find($idpelanggan);
        $pelanggan->namapelanggan = $request->namapelanggan;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->hp = $request->hp;

        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $tujuan_upload = public_path('images');
            $filename = $file->getClientOriginalName();
            $file->move($tujuan_upload, $filename);
            $pelanggan->photo = $filename;
        }

        $pelanggan->save();
        
        return redirect('/pelanggan');
    }

    public function delete($idpelanggan)
    {
        $pelanggan = Pelanggan::find($idpelanggan);
        $pelanggan->delete();
        
        return redirect('/pelanggan');
    }

}
