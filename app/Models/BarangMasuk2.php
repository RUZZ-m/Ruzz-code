<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk2 extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_barang',
        'id_supplier',
        'jumlah'
    ];
    
    public function barang(){
        return $this->belongsTo(barang::class, 'id_barang','id');
    }
    public function supplier(){
        return $this->belongsTo(supplier::class, 'id_supplier','id');
    }
}
