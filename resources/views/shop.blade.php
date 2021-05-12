@extends('templates.header');

@section('title')
Baju Hijau
@endsection

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
          @if(!isset($path))
          <span>Shop</span>
          @endif
          @if(isset($path))
          <a href="{{ url('/shop') }}"><i class="fa fa-shopping-cart"></i> Shop</a>
          <span>{{$path->category_name}}</span>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
        <div class="filter-widget">
          <h4 class="fw-title">Categories</h4>
          <ul class="filter-catagories">
            @foreach($categories as $category)
            @if(isset($path) && $category->id == $path->id)
            <li style="background: blanchedalmond;"><a href="{{ url('/shop/category/'.$category->id) }}" style="font-weight:bold; color:#e7ab3c;">{{$category->category_name}}</a></li>
            @else
            <li><a href="{{ url('/shop/category/'.$category->id) }}">{{$category->category_name}}</a></li>
            @endif
            @endforeach
          </ul>
        </div>
      </div>
      <div class="col-lg-9 order-1 order-lg-2">
        <div class="product-list">
          <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <a href="{{ url('/shop/'.$product->id) }}">
                    <img src="{{ asset('storage/'.$product->product_img) }}" alt="">
                  </a>
                  <ul>
                    <li class="quick-view"><a href="{{ url('/shop/'.$product->id) }}">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">{{$product->category->category_name}}</div>
                  <a href="{{ url('/shop/'.$product->id) }}">
                    <h5>{{$product->product_name}}</h5>
                  </a>
                  <div class="product-price">
                    {{formatMoney($product->product_price, "Rp. ")}},-
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Product Shop Section End -->
@endsection