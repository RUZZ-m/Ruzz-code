<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasuk2;
use App\Models\BarangKeluar;
use App\Models\Supplier;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $totalBarang = Barang::count();
        $totalBarangMasuk = BarangMasuk2::sum('jumlah');
        $totalBarangKeluar = BarangKeluar::sum('jumlah');
        $totalSupplier = Supplier::sum('id');


        $inputTerakhirBarangMasuk = BarangMasuk2::orderBy('created_at', 'desc')->first();
        $inputTerakhirBarangKeluar = BarangKeluar::orderBy('created_at', 'desc')->first();
        return view('home.dashboard', compact('totalBarang','totalBarangMasuk','totalBarangKeluar','totalSupplier','inputTerakhirBarangMasuk','inputTerakhirBarangKeluar'));
    }

}
