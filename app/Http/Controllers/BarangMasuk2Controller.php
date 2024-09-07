<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk2;
use App\Models\Barang;
use App\Models\Supplier;
class BarangMasuk2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_masuk= BarangMasuk2::all();
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
            'jumlah' => 'required|numeric',
        ]);

        $id=$request->id_barang;
        $barang= barang::find($id);
        $barang->increment('stok', $request->jumlah);
        
        BarangMasuk2::create([
            'id_barang' => $request->id_barang,
            'id_supplier' =>$request->id_supplier,
            'jumlah' => $request->jumlah,
        ]);
        return redirect('/barang_masuk')->with('succsess', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang_masuk = BarangMasuk2::find($id);
        $supplier = Supplier::all();
        $barang = Barang::all();
        return view('home.barang_masuk.edit', compact('barang_masuk', 'supplier', 'barang'));
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
        $barang_masuk =BarangMasuk2::find($id);
        $barang_masuk->update([ 
            'id_barang' =>$request->id_barang,
            'id_supplier' => $request->id_supplier,
            'jumlah' => $request->jumlah,
        ]);
        return redirect('/barang_masuk')->with('succsess','berhasil rek');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang_masuk = BarangMasuk2::find($id);
        $barang_masuk->delete();
        return redirect('/barang_masuk');
    }
    public function report()
    {
        $barang_masuk= BarangMasuk2::all();
        return view('home.barang_masuk.report', compact('barang_masuk'));
    }
}
