<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $table        = 'tbl_pinjam';
    protected $primaryKey   = 'idpinjam';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $fillable     = ['idpinjam', 'idpelanggan', 'idmobil', 'lamapinjam'];

    public function mobil()
    {
        return $this->belongsTo('App\Models\Mobil','idmobil');
    }

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan','idpelanggan');
    }
}
