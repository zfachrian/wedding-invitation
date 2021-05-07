@extends('templates.backDashboard')

@section('title')
Banner
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Banner</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">Panel</li>
          <li class="breadcrumb-item active">Banner</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-success btn-sm float-right ">Tambah Kategori</button>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      @for($i = 0; $i < 5; $i++) <div class="col-md-3">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Nama Banner</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool"><i class="fas fa-times"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <img class="img-fluid pad" src="https://adminlte.io/themes/dev/AdminLTE/dist/img/photo2.png" alt="Photo">
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    @endfor

  </div>
  </div>
</section>
@endsection