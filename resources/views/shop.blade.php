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
          <a href="#"><i class="fa fa-home"></i> Home</a>
          <span>Shop</span>
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
            <li><a href="#">Men</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Kids</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-9 order-1 order-lg-2">
        <div class="product-list">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <a href="{{ url('/shop/1') }}">
                    <img src="img/products/product-1.jpg" alt="">
                  </a>
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Towel</div>
                  <a href="#">
                    <h5>Pure Pineapple</h5>
                  </a>
                  <div class="product-price">
                    $14.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/product-2.jpg" alt="">
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Coat</div>
                  <a href="#">
                    <h5>Guangzhou sweater</h5>
                  </a>
                  <div class="product-price">
                    $13.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/product-3.jpg" alt="">
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Shoes</div>
                  <a href="#">
                    <h5>Guangzhou sweater</h5>
                  </a>
                  <div class="product-price">
                    $34.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/product-4.jpg" alt="">
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Coat</div>
                  <a href="#">
                    <h5>Microfiber Wool Scarf</h5>
                  </a>
                  <div class="product-price">
                    $64.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/product-5.jpg" alt="">
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Shoes</div>
                  <a href="#">
                    <h5>Men's Painted Hat</h5>
                  </a>
                  <div class="product-price">
                    $44.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/product-6.jpg" alt="">
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Shoes</div>
                  <a href="#">
                    <h5>Converse Shoes</h5>
                  </a>
                  <div class="product-price">
                    $34.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/product-7.jpg" alt="">
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Towel</div>
                  <a href="#">
                    <h5>Pure Pineapple</h5>
                  </a>
                  <div class="product-price">
                    $64.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/product-8.jpg" alt="">
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Coat</div>
                  <a href="#">
                    <h5>2 Layer Windbreaker</h5>
                  </a>
                  <div class="product-price">
                    $44.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/product-9.jpg" alt="">
                  <ul>
                    <li class="quick-view"><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Shoes</div>
                  <a href="#">
                    <h5>Converse Shoes</h5>
                  </a>
                  <div class="product-price">
                    $34.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Product Shop Section End -->
@endsection