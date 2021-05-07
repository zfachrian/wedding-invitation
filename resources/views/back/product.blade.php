@extends('templates.backDashboard')

@section('title')
Produk
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Produk</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Panel</li>
          <li class="breadcrumb-item active">Produk</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Produk</h3>
            <button type="button" class="btn btn-success btn-sm float-right ">Tambah Produk</button>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th style="width: 40px">Action</th>
                  <th style="width: 40px"></th>
                </tr>
              </thead>
              <tbody>

                @for($i = 1; $i <= 5; $i ++) <tr>
                  <td>{{$i}}.</td>
                  <td><img class="img-fluid pad" src="https://adminlte.io/themes/dev/AdminLTE/dist/img/photo2.png" alt="Photo"></td>
                  <td>Nama Kategori</td>
                  <td><span class="badge bg-danger">Hapus</span></td>
                  <td><span class="badge bg-warning">Ubah</span></td>
                  </tr>
                  @endfor

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>

    </div>
  </div>
</section>
@endsection