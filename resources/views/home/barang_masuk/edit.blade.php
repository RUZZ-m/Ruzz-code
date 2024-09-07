@extends('layouts.master')
@section('tittle', 'barang_masuk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h1>Detail Barang Masuk</h1>

            <!-- Detail Barang Masuk -->
            <div class="card mb-3">
                <div class="card-header">
                    <h3>Barang Masuk: {{ $barang_masuk->id }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Tanggal:</strong> {{ $barang_masuk->created_at }}</p>
                    <p><strong>Supplier ID:</strong> {{ $barang_masuk->id_supplier }}</p>
                </div>
            </div>

            <!-- Daftar Detail Barang Masuk -->
            <div class="card">
                <div class="card-header">
                    <h3>Detail Barang Masuk</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/products/'.$barang_masuk->barang->gambar)}}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{$barang_masuk->jumlah}}</td>
                                <td>Rp. {{number_format($barang_masuk->barang->harga_jual)}}</td>
                                <td>Rp. {{number_format($barang_masuk->jumlah * $barang_masuk->barang->harga_jual)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection