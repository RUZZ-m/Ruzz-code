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
          <i class="fas fa-globe"></i> Laporan Barang Masuk
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
            <th>Nama Supplier</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Tanggal</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($barang_masuk as $barang_masuk)
              <tr>
                <td>{{$barang_masuk->id}}</td>
                <td>{{$barang_masuk->barang->nama_barang}}</td>
                <td>{{$barang_masuk->supplier->nama_supplier}}</td>
                <td>{{$barang_masuk->jumlah}}</td>
                <td>Rp. {{number_format($barang_masuk->barang->harga_beli)}}</td>
                <td>Rp. {{number_format($barang_masuk->barang->harga_beli * $barang_masuk->jumlah)}}</td>
                <td>{{$barang_masuk->created_at}}</td>
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
