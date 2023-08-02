<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table        = 'tbl_pelanggan';
    protected $primaryKey   = 'idpelanggan';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $fillable     = ['idpelanggan', 'namapelanggan', 'hp', 'alamat', 'photo'];

    public function pinjam()
    {
        return $this->hasMany('App\Models\Pinjam','idpelanggan');
    }
}

