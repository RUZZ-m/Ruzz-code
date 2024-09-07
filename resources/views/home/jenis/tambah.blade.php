@extends('layouts.master');
@section('title,jenis');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Halaman Tambah Data Jenis</h3>
                        <a class="btn btn-primary" href="/jenis">Kembali</a>
                    </div>
                    <div class="card-body">
                <form action="/jenis/simpan" method="post">
                        @csrf
                       <div class="mb-3">
                        <label for="" class="form-label">Nama jenis</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nama_jenis"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                       </div>
                      <button class="btn btn-primary" type="submit">simpan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

