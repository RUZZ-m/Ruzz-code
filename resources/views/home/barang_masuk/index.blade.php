@extends('layouts.master');
@section('title,barang_masuk');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Halaman Data Barang Masuk</h3>
                        <a class="btn btn-primary" href="/barang_masuk/tambah">Tambah</a>
                        <a class="btn btn-primary" href="/barang_masuk/report">print</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table table-bordered table-striped"
                            id="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id supplier </th>
                                        <th scope="col">id Barang </th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang_masuk as $barang_masuk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>                                        
                                        <td>{{ $barang_masuk->id_supplier}}</td>
                                        <td>{{ $barang_masuk->id_barang }}</td>
                                        <td>{{ $barang_masuk->jumlah}}</td>

                                        <td><a class="btn btn-info" href="/barang_masuk/{{ $barang_masuk->id }}/show">Show</a>
                                    </td>
                                    </tr>
                             @endforeach
                                    </tr>
                                </tbody>
                            </table>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@if(session('succsess'))
<script>
    Swal.fire({
  title: "",
  text: "{{session('succsess')}}",
  icon: "success"
});
</script>
@endif
@endsection