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
          <a href="./home.html"><i class="fa fa-home"></i> Home</a>
          <a href="./shop.html">Shop</a>
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
            <img class="product-big-img" src="{{asset('img/product-single/product-1.jpg')}}" alt="">
          </div>
          <div class="col-lg-6">
            <div class="product-details">
              <div class="pd-title">
                <span>oranges</span>
                <h3>Pure Pineapple</h3>
                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
              </div>
              <div class="pd-desc">
                <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor
                  sit amet, consectetur adipisicing elit, sed do mod tempor</p>
                <h4>$495.00</h4>
              </div>
              <div class="quantity">
                <div class="pro-qty">
                  <input type="text" value="1">
                </div>
              </div>
              <a href="https://api.whatsapp.com/send?phone=6281235250202&text=Halo%20mau%20beli%20baju%20orange%20sebanyak%20" class="primary-btn pd-cart" style="margin-right:10px;">Beli</a>
              <a href="https://api.whatsapp.com/send?phone=6281235250202&text=Halo%20mau%20tukar%20baju%20orange%20sebanyak%20" class="primary-btn pd-cart" style="background-color: brown;">Tukar</a>
            </div>
          </div>
        </div>
        <!-- <div class="product-tab">
          <div class="tab-item">
            <h3>DESCRIPTION</h3>
          </div>
          <div class="tab-item-content">
            <div class="tab-content">
              <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                <div class="product-content">
                  <div class="row">
                    <div class="col-lg-7">
                      <h5>Introduction</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                      <h5>Features</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                    </div>
                    <div class="col-lg-5">
                      <img src="img/product-single/tab-desc.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-2" role="tabpanel">
                <div class="specification-table">
                  <table>
                    <tr>
                      <td class="p-catagory">Customer Rating</td>
                      <td>
                        <div class="pd-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <span>(5)</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-catagory">Price</td>
                      <td>
                        <div class="p-price">$495.00</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-catagory">Add To Cart</td>
                      <td>
                        <div class="cart-add">+ add to cart</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-catagory">Availability</td>
                      <td>
                        <div class="p-stock">22 in stock</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-catagory">Weight</td>
                      <td>
                        <div class="p-weight">1,3kg</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-catagory">Size</td>
                      <td>
                        <div class="p-size">Xxl</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-catagory">Color</td>
                      <td><span class="cs-color"></span></td>
                    </tr>
                    <tr>
                      <td class="p-catagory">Sku</td>
                      <td>
                        <div class="p-code">00012</div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-3" role="tabpanel">
                <div class="customer-review-option">
                  <h4>2 Comments</h4>
                  <div class="comment-option">
                    <div class="co-item">
                      <div class="avatar-pic">
                        <img src="img/product-single/avatar-1.png" alt="">
                      </div>
                      <div class="avatar-text">
                        <div class="at-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                        <div class="at-reply">Nice !</div>
                      </div>
                    </div>
                    <div class="co-item">
                      <div class="avatar-pic">
                        <img src="img/product-single/avatar-2.png" alt="">
                      </div>
                      <div class="avatar-text">
                        <div class="at-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <h5>Roy Banks <span>27 Aug 2019</span></h5>
                        <div class="at-reply">Nice !</div>
                      </div>
                    </div>
                  </div>
                  <div class="personal-rating">
                    <h6>Your Ratind</h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                  <div class="leave-comment">
                    <h4>Leave A Comment</h4>
                    <form action="#" class="comment-form">
                      <div class="row">
                        <div class="col-lg-6">
                          <input type="text" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                          <input type="text" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                          <textarea placeholder="Messages"></textarea>
                          <button type="submit" class="site-btn">Send message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
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
      <div class="col-lg-3 col-sm-6">
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{asset('img/products/women-1.jpg')}}" alt="">
            <ul>
              <li class="quick-view"><a href="#">Shop Now</a></li>
            </ul>
          </div>
          <div class="pi-text">
            <div class="catagory-name">Coat</div>
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
      <div class="col-lg-3 col-sm-6">
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{asset('img/products/women-2.jpg')}}" alt="">
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
              $13.00
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{asset('img/products/women-3.jpg')}}" alt="">
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
              $34.00
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{asset('img/products/women-4.jpg')}}" alt="">
            <ul>
              <li class="quick-view"><a href="#">Shop Now</a></li>
            </ul>
          </div>
          <div class="pi-text">
            <div class="catagory-name">Towel</div>
            <a href="#">
              <h5>Converse Shoes</h5>
            </a>
            <div class="product-price">
              $34.00
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Related Products Section End -->
@endsection