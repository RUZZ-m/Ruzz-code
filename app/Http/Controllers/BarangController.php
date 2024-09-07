<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang= Barang::all();
        return view('home.barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis= Jenis::all();
        return view('home.barang.tambah', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jepg,jpg,png|max:5048',
            'nama_barang'=> 'required|min:5',
            'id_jenis' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/products', $image->hashName());

        // untuk produk
        Barang::create([
            'gambar' => $image->hashName(),
            'nama_barang' =>$request->nama_barang,
            'id_jenis' => $request->id_jenis,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok,
        ]);
        return redirect('/barang')->with('succsess','barang berhasil di tambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::find($id);
        $jenis = Jenis::all();
        return view('home.barang.edit', compact('barang','jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jepg,jpg,png|max:5048',
            'nama_barang'=> 'required|min:5',
            'id_jenis' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);
        
        $barang = Barang::find($id);
        $image = $request->file('gambar');
         $image->storeAs('public/products', $image->hashName());
    
        $barang->update([
            'gambar' => $image->hashName(),
            'nama_barang' =>$request->nama_barang,
            'id_jenis' => $request->id_jenis,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok,
        ]);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
