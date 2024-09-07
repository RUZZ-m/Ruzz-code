<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\Barang;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_keluar=BarangKeluar::all();
        return view('home.barang_keluar.index',compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang=Barang::all();
        return view('home.barang_keluar.tambah',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required', 'nama_costumer'=>'required', 'jumlah'=>'required|numeric',
        ]);

        $id=$request->id_barang;
        $barang=Barang::find($id);
        
        if ($barang->stok < $request->jumlah){
            return redirect('/barang_keluar')->with('error', 'Stok tidak cukup rek!!');
        }

        $barang->decrement('stok',$request->jumlah);
        BarangKeluar::create([
            'id_barang'=>$request->id_barang,
            'nama_costumer'=>$request->nama_costumer,
            'jumlah'=>$request->jumlah
        ]);
        return redirect('/barang')->with('succsess', 'Barang Keluar berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang_keluar= BarangKeluar::find($id);
        $barang=Barang::all();
        return view('home.barang_keluar.edit', compact('barang_keluar','barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang_keluar=BarangKeluar::find($id);
        $barang_keluar->update([
            'id_barang'=>$request->id_barang,
            'nama_costumer'=>$request->nama_costumer,
            'jumlah'=>$request->jumlah
        ]);
        return redirect('/barang_keluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang_keluar=BarangKeluar::find($id);
        $barang_keluar->delete();
        return redirect('/barang_keluar');
    }
    public function report()
    {
        $barang_keluar= BarangKeluar::all();
        return view('home.barang_keluar.report', compact('barang_keluar'));
    }
}
