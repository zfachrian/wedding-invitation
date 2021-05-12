@extends('templates.backDashboard')

@section('title')
Setting Password
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Setting Password</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">Panel</li>
          <li class="breadcrumb-item active">Setting Password</li>
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
            <h3 class="card-title">Form Reset Password</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th style="width: 40px">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($users as $user)
                  @if($user->name !== 'sapu jagat')
                  <tr>
                    <td>{{$loop->iteration}}.</td>
                    <td>{{$user->name}}</td>
                    <td>
                      <form role="form" method="post" action="{{route('back.password.reset')}}">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{$user->id}}" />
                        <input type="hidden" name="password" value="reset" />
                        <button type="submit" class="btn btn-block btn-info btn-sm">Reset</button>
                      </form>
                    </td>
                  </tr>
                  @endif
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