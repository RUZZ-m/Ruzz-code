<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $fillable =[
        'nama_jenis'
    ];
    public function barang(){
        return $this->hasMany(Barang::class, 'id_jenis','id');
    }
}
