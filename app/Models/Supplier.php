<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable =[
        'nama_supplier',
        'alamat',
        'no_tlp'
    ];
    public function barang_masuk(){
        return $this->hasMany(BarangMasuk::class, 'id_supplier','id');
    }
}
