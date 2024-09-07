@extends('layouts.master')
@section('tittle', 'barang_keluar')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h1>Detail Barang Keluar</h1>

            <!-- Detail Barang keluar -->
            <div class="card mb-3">
                <div class="card-header">
                    <h3>Barang keluar: {{ $barang_keluar->id }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Tanggal:</strong> {{ $barang_keluar->created_at }}</p>
                    <p><strong>Barang ID:</strong> {{ $barang_keluar->id_barang}}</p>
                </div>
            </div>

            <!-- Daftar Detail Barang keluar -->
            <div class="card">
                <div class="card-header">
                    <h3>Detail Barang keluar</h3>
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
                                    <img src="{{ asset('/storage/products/'.$barang_keluar->barang->gambar)}}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{$barang_keluar->jumlah}}</td>
                                <td>Rp. {{number_format($barang_keluar->barang->harga_jual)}}</td>
                                <td>Rp. {{number_format($barang_keluar->jumlah * $barang_keluar->barang->harga_jual)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection