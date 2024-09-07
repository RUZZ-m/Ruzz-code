<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\Supplier;
use illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_masuk= BarangMasuk::all();
        return view('home.barang_masuk.index', compact('barang_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang= Barang::all();
        $supplier= Supplier::all();
        return view('home.barang_masuk.tambah', compact('supplier','barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'id_supplier'=> 'required',
            'jumlah' => 'required',
        ]);

        $id=$request->id_barang;
        $barang= barang::find(id);
        $barang->increment('stok', $request->jumlah);
        
        BarangMasuk::create([
            'id_barang' => $request->id_barang,
            'id_supplier' =>$request->id_supplier,
            'jumlah' => $request->jumlah,
        ]);
        return redirect('/barang_masuk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang_masuk = BarangMasuk::find($id);
        return view('home.barang_masuk.edit', compact('barang_masuk'));
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
        BarangMasuk::update([ 
            'id_barang' =>$request->id_barang,
            'id_supplier' => $request->id_supplier,
            'jumlah' => $request->jumlah,
        ]);
        return redirect('/barang_masuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang_masuk = BarangMasuk::find($id);
        $barang_masuk->delete();
        return redirect('/barang_masuk');
    }
    public function detail(string $id)
    {
        $barang_masuk = BarangMasuk::find($id);
        return view('home.barang_masuk.edit', compact('barang_masuk'));
    }
 
    }

