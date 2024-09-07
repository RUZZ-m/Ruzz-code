@extends('layouts.master');
@section('title,barang');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Halaman Tambah Data Barang</h3>
                        <a class="btn btn-primary" href="/barang">Kembali</a>
                    </div>
                    <div class="card-body">
                <form action="/barang/simpan" method="post" enctype="multipart/form-data">
                        @csrf

                       <div class="mb-3">
                        <label for="" class="form-label">Gambar</label>
                        <input
                            type="file"
                            class="form-control"
                            name="gambar"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       @error('gambar')
                     <div class="alert alert-danger mt-2">
                        {{$message}}
                     </div>
                     @enderror

                       <div class="mb-3">
                        <label for="" class="form-label">Nama barang</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nama_barang"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       @error('nama_barang')
                     <div class="alert alert-danger mt-2">
                        {{$message}}
                     </div>
                     @enderror

                       <div class="mb-3">
                        <label for="" class="form-label">Id Jenis</label>
                        <select name="id_jenis" id="">
                        @foreach($jenis as $jenis)
                        <option value="{{$jenis->id}}">{{$jenis->nama_jenis}}</option>
                        @endforeach
                        </select>
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       @error('id_jenis')
                     <div class="alert alert-danger mt-2">
                        {{$message}}
                     </div>
                     @enderror
                       <div class="mb-3">
                        <label for="" class="form-label">Harga Beli</label>
                        <input
                            type="text"
                            class="form-control"
                            name="harga_beli"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       @error('harga_beli')
                     <div class="alert alert-danger mt-2">
                        {{$message}}
                     </div>
                     @enderror
                       <div class="mb-3">
                        <label for="" class="form-label">Harga Jual</label>
                        <input
                            type="text"
                            class="form-control"
                            name="harga_jual"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       @error('harga_jual')
                     <div class="alert alert-danger mt-2">
                        {{$message}}
                     </div>
                     @enderror
                       <div class="mb-3">
                        <label for="" class="form-label">Stok</label>
                        <input
                            type="text"
                            class="form-control"
                            name="stok"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       @error('stok')
                     <div class="alert alert-danger mt-2">
                        {{$message}}
                     </div>
                     @enderror
                      <button class="btn btn-primary" type="submit">simpan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

