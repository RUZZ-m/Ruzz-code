<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Laporan Barang Keluar
          <small class="float-right">{{ \Carbon\Carbon::now()->format('d F Y') }}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped text-center">
          <thead>
          <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Nama costumer</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Tanggal</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($barang_keluar as $barang_keluar)
              <tr>
                <td>{{$barang_keluar->id}}</td>
                <td>{{$barang_keluar->barang->nama_barang}}</td>
                <td>{{$barang_keluar->nama_costumer}}</td>
                <td>{{$barang_keluar->jumlah}}</td>
                <td>Rp. {{number_format($barang_keluar->barang->harga_beli)}}</td>
                <td>Rp. {{number_format($barang_keluar->barang->harga_beli * $barang_keluar->jumlah)}}</td>
                <td>{{$barang_keluar->created_at}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
