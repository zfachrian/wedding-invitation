@extends('templates.backDashboard')

@section('title')
Edit Store
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Store Setting</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">Panel</li>
          <li class="breadcrumb-item active">Store Setting</li>
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
            <h3 class="card-title">Form Store Setting</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{route('back.store.update', $store->id)}}">
            @csrf
            @method('put')

            <div class="card-body">
              <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="judul kategori" value="{{$store->store_name}}">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="judul kategori" value="{{$store->store_email}}">
              </div>

              <div class="form-group">
                <label for="whatsapp">Whatsapp</label>
                <input type="text" class="form-control" name="whatsapp" placeholder="judul kategori" value="{{$store->store_wa}}">
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="judul kategori" value="{{$store->store_phone}}">
              </div>
              
              <div class="form-group">
                <label for="phone">Address</label>
                <textarea class="form-control" rows="3" name="address" placeholder="address">{{$store->store_address}}</textarea>
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