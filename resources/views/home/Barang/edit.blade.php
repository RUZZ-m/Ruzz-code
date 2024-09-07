@extends('layouts.master');
@section('title,barang');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Halaman edit Data Barang</h3>
                        <a class="btn btn-primary" href="/barang">Kembali</a>
                    </div>
                    <div class="card-body">
                <form action="/barang/{{ $barang->id }}/update" method="post" enctype="multipart/form-data">
                        @csrf
                       <div class="mb-3">
                        <label for="" class="form-label">Gambar</label>
                        <input
                            type="file"
                            class="form-control"
                            name="gambar"
                            id=""
                             value="{{ $barang->gambar }}"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
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
                            value="{{ $barang->nama_barang }}"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
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
                        <small id="helpId" class="form-text text-muted">Help text</small>
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
                            value="{{ $barang->harga_beli }}"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
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
                            value="{{ $barang->harga_jual }}"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
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
                            value="{{ $barang->stok }}"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                       </div>
                       @error('stok')
                     <div class="alert alert-danger mt-2">
                        {{$message}}
                     </div>
                     @enderror
                      <button class="btn btn-primary" type="submit">update</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

