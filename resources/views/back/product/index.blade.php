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

      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Produk</h3>
            <a href="{{route('back.product.create')}}" class="btn btn-success btn-sm float-right ">Tambah Produk</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">No</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Kategori</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Harga</th>
                        <th class="sorting sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending">Foto</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                      <tr class="odd">
                        <td class="dtr-control" tabindex="0">{{$loop->iteration}}.</td>
                        <td class="sorting_1">{{$product->product_name}}</td>
                        <td class="">{{$product->category->category_name}}</td>
                        <td class="">{{formatMoney($product->product_price, "Rp. ")}},-</td>
                        <td class="text-center"> <img class="img-fluid pad" style="max-width: 300px;" src="{{ asset('storage/'.$product->product_img) }}" alt="Photo"></td>
                        <td>
                          <form role="form" method="post" action="{{route('back.product.destroy', $product->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-block btn-danger btn-sm">Hapus</button>
                          </form>
                        </td>
                        <td><a href="{{route('back.product.edit', $product->id)}}" class="btn btn-block btn-warning btn-sm">Ubah</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th rowspan="1" colspan="1">No</th>
                        <th rowspan="1" colspan="1">Nama</th>
                        <th rowspan="1" colspan="1">Kategori</th>
                        <th rowspan="1" colspan="1">Harga</th>
                        <th rowspan="1" colspan="1">Foto</th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>

    </div>
  </div>
</section>
@endsection