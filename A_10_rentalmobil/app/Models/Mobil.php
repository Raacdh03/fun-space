<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table        = 'tbl_mobil';
    protected $primaryKey   = 'idmobil';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $fillable     = ['idmobil', 'platnomor', 'merk', 'type', 'warna', 'photomobil'];

    public function pinjam()
    {
        return $this->hasMany('App\Models\Pinjam','idmobil');
    }
}

