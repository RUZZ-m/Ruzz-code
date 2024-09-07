@extends('layouts.master')
@section('title','dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$totalBarang}}</h3>

                <p>Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$totalBarangMasuk}}</h3>

                <p>Barang Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/barang_masuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$totalBarangKeluar}}</h3>

                <p>Barang Keluar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/barang_keluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$totalSupplier}}</h3>

                <p>supplier</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/supplier" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>


    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>History Terakhir Barang Masuk</h3>
                </div>
                @if($inputTerakhirBarangMasuk)
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Nama Supplier</th>
                          <th scope="col">Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{$inputTerakhirBarangMasuk->id}}</td>
                          <td>{{$inputTerakhirBarangMasuk->barang->nama_barang}}</td>
                          <td>{{$inputTerakhirBarangMasuk->supplier->nama_supplier}}</td>
                          <td>{{$inputTerakhirBarangMasuk->jumlah}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                @else
                 <div class="alert alert-danger">
                  Tidak ada barang masuk
                 </div>
                @endif
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>History Terakhir Barang Keluar</h3>
                </div>
                <div class="card-body">
                  @if($inputTerakhirBarangKeluar)
                <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Nama costumer</th>
                      <th scope="col">Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$inputTerakhirBarangKeluar->id}}</td>
                      <td>{{$inputTerakhirBarangKeluar->barang->nama_barang}}</td>
                      <td>{{$inputTerakhirBarangKeluar->nama_costumer}}</td>
                      <td>{{$inputTerakhirBarangKeluar->jumlah}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                </div>
                @else
                 <div class="alert alert-danger">
                  Tidak ada barang keluar
                 </div>
                 @endif
            </div>
        </div>
    </div>
    </section>

  </div>
@endsection
