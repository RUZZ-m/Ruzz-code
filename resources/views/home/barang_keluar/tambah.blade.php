@extends('layouts.master');
@section('title,barang_keluar');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Halaman Tambah Data Barang Keluar</h3>
                        <a class="btn btn-primary" href="/barang_keluar">Kembali</a>
                    </div>
                    <div class="card-body">
                <form action="/barang_keluar/simpan" method="post">
                        @csrf

                       

                      

                       <div class="mb-3">
                        <label for="" class="form-label">Id Barang</label>
                        <select name="id_barang" id="" class="form-control">
                        @foreach($barang as $barang)
                        <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                        @endforeach
                        </select>
                        <small id="helpId" class="form-text text-muted">Help text</small>
                       </div>
                       
                       @error('id_barang')
                     <div class="alert alert-danger mt-2">
                        {{$message}}
                     </div>
                     @enderror

                       
                       <div class="mb-3">
                        <label for="" class="form-label">Nama Costumer</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nama_costumer"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                       </div>
                        @error('nama_costumer')
                         <div class="alert alert-danger mt-2">
                          {{$message}}
                             </div>
                                 @enderror

                       <div class="mb-3">
                        <label for="" class="form-label">Jumlah</label>
                        <input
                            type="varchar"
                            class="form-control"
                            name="jumlah"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                       </div>
                       @error('jumlah')
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

