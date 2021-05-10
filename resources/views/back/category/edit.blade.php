@extends('templates.backDashboard')

@section('title')
Edit Category
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Category</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">Panel</li>
          <li class="breadcrumb-item active"><a href="{{route('back.category')}}">Category</a></li>
          <li class="breadcrumb-item active">Edit</li>
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
            <h3 class="card-title">Form Category</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{route('back.category.update', $category->id)}}">
            @csrf
            @method('put')
            <div class="card-body">
              <div class="form-group">
                <label for="title">Judul Kategori *</label>
                <input type="text" class="form-control" name="title" placeholder="judul kategori" value="{{$category->category_name}}" required>
              </div>
              <div class="form-group">
                <label for="description">Description Kategori</label>
                <textarea class="form-control" rows="3" name="description" placeholder="description kategori">{{$category->category_detail}}</textarea>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Update</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection