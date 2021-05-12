@extends('templates.header');

@section('title')
Shop
@endsection

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text product-more">
          <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
          <a href="{{url('/shop')}}"><i class="fa fa-shopping-cart"></i> Shop</a>
          <span>Detail</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
  <div class="container">
    <div class="row">
      <div class="col-lg">
        <div class="row">
          <div class="col-lg-6">
            <img class="product-big-img" src="{{ asset('storage/'.$product->product_img) }}" alt="">
          </div>
          <div class="col-lg-6">
            <div class="product-details">
              <div class="pd-title">
                <span>{{$product->category->category_name}}</span>
                <h5 style="color:#e7ab3c; font-weight: bold;">Kode: {{$product->product_code}}</h5>
                <h3>{{$product->product_name}}</h3>
              </div>
              <div class="pd-desc">
                <h4 class="mt-4">{{formatMoney($product->product_price, "Rp. ")}},-</h4>
                <h4 class="mt-4">Transfer Pembayaran</h4>
                <h5>{{$stores->store_bank_account}}</h5>
              </div>
              <div class="pd-desc">
                <p style="white-space: pre-wrap;">{{$product->product_description}}</p>
              </div>
              <a href="{{'https://api.whatsapp.com/send?phone='. $stores->store_wa .'&text='.  $stores->store_text_buy .' '. $product->product_name . '%20('.$product->product_code.')'}}" class="primary-btn pd-cart" style="margin-right:10px;">Beli</a>
              <a href="{{'https://api.whatsapp.com/send?phone='. $stores->store_wa .'&text='. $stores->store_text_buy .' '. $product->product_name . '%20('.$product->product_code.')'}}" class="primary-btn pd-cart" style="background-color: brown;">Tukar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Related Products</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($relatedProducts as $product)
      <div class="col-lg-3 col-sm-6">
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
<!-- Related Products Section End -->
@endsection