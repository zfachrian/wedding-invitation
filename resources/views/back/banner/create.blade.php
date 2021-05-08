@extends('templates.backDashboard')

@section('title')
Create Banner
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Banner</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">Panel</li>
          <li class="breadcrumb-item active"><a href="{{route('back.banner')}}">Banner</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
          {{ $message }}
        </div>
        @endif

        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{ $error }}
        </div>
        @endforeach

        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Form Banner</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{route('back.banner.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Judul Banner</label>
                <input type="text" class="form-control" name="title" placeholder="judul banner">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description Banner</label>
                <input type="text" class="form-control" name="description" placeholder="description banner">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto Banner *</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image" required>
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
                <p>ukurang maksimal 2mb, dengan format jpg/png</p>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection