<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        
        return view('mobil', ['mobil' => $mobil]);
    }

    public function tambah()
    {
        return view('mobil_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            'photomobil' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'platnomor' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'warna' => 'required'
        ]);
        
        $file = $request->file('photomobil');
        $namafile = time() . "_" . $file->getClientOriginalName();

        $tujuanupload = 'images';
        $file->move($tujuanupload, $namafile);

        Mobil::create([
            'photomobil' => $file->getClientOriginalName()            ,
            'platnomor' => $request->platnomor,
            'merk' => $request->merk,
            'type' => $request->type,
            'warna' => $request->warna
        ]);
        
        return redirect('/mobil');
    }

    public function edit($idmobil)
    {
        $mobil = Mobil::find($idmobil);
        return view('mobil_edit', ['mobil' => $mobil]);
    }

    public function update($idmobil, Request $request)
    {
        $this->validate($request,[
            'photomobil' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
            'platnomor' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'warna' => 'required'
        ]);

        // $file = $request->file('photomobil');
        // $namafile = time() . "_" . $file->getClientOriginalName();

        // $tujuanupload = 'images';
        // $file->move($tujuanupload, $namafile);
        
        $mobil = Mobil::find($idmobil);

        if ($request->hasFile('photomobil')){
            $file = $request->file('photomobil');
            $tujuan_upload = public_path('images');
            $filename = $file->getClientOriginalName();
            $file->move($tujuan_upload, $filename);
            $mobil->photomobil = $filename;
        }

        $mobil->platnomor = $request->platnomor;
        $mobil->merk = $request->merk;
        $mobil->type = $request->type;
        $mobil->warna = $request->warna;
        $mobil->save();
        
        return redirect('/mobil');
    }

    public function delete($idmobil)
    {
        $mobil = Mobil::find($idmobil);
        $mobil->delete();
        
        return redirect('/mobil');
    }
}
