<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangkeluar extends Model
{
    use HasFactory;
    protected $guarded =[
        'id'
    ];
    protected $table ='barang_keluars';
    
    public function barang(){
        return $this->belongsTo(barang::class, 'id_barang','id');
    }
}
