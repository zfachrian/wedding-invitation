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
        <a href="{{ route('back.banner.create') }}" class="btn btn-success btn-sm float-right ">Tambah Banner</a>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">

      @if(count($banners) == 0)
      <h5 class="mt-5" style="margin: auto;">Banner Kosong</h5>
      @endif

      @foreach($banners as $banner)
      <div class="col-md-3">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">{{$loop->iteration}}. {{$banner->banner_title}}</h3>

            <div class="card-tools">
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <img class="img-fluid pad" src="{{ asset('storage/'.$banner->banner_image) }}" alt="Photo">

            <div class="row mt-2">
              <div class="col-6">
                <form role="form" method="post" action="{{route('back.banner.destroy', $banner->id)}}" enctype="multipart/form-data">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-block bg-gradient-danger btn-sm float-left">Hapus</button>
                </form>
              </div>
              <div class="col-6">
                <a href="{{ route('back.banner.edit', $banner->id) }}" class="btn btn-block bg-gradient-warning btn-sm float-right">Ubah</a>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      @endforeach

    </div>
  </div>
</section>
@endsection