@extends('templates.backDashboard')

@section('title')
Kategori
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Kategori</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Panel</li>
          <li class="breadcrumb-item active">Kategori</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Kategori</h3>
            <a href="{{route('back.category.create')}}" class="btn btn-success btn-sm float-right ">Tambah Kategori</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th style="width: 50%">Deskripsi</th>
                  <th style="width: 40px">Action</th>
                  <th style="width: 40px"></th>
                </tr>
              </thead>
              <tbody>

                @foreach($categories as $category)
                <tr>
                  <td>{{$loop->iteration}}.</td>
                  <td>{{$category->category_name}}</td>
                  <td>{{$category->category_detail}}</td>
                  <td>
                    <form role="form" method="post" action="{{route('back.category.destroy', $category->id)}}">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-block btn-danger btn-sm">Hapus</button>
                    </form>
                  </td>
                  <td><a href="{{route('back.category.edit', $category->id)}}" class="btn btn-block btn-warning btn-sm">Ubah</a></td>
                </tr>
                @endforeach

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