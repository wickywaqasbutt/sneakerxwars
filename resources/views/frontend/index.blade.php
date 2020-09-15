@extends('frontend.layouts.master')
@section('title', 'Home 2 || Juta - Ecommerce Bootstrap 4 Template')
@section('styling')
@endsection
@section('content')
<!-- slider-main-area start -->
<div class="slider-main-area">
  <div class="slider-active owl-carousel">
    <!-- slider-wrapper start -->
    <div class="slider-wrapper" style="background-image:url(frontend-assets/img/slider/home-2-01.jpg)">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="slider-text-info style-2 text-center slider-text-animation">
              <h1 class="title1"><span class="text">Nike</span> Baseball</h1>
              <p>We've handpicked our best gifts for all kinds of athletes.</p>
              <div class="slier-btn-1">
                <a title="shop now" href="#" class="shop-btn">Shopping now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-wrapper end -->
    <!-- slider-wrapper start -->
    <div class="slider-wrapper" style="background-image:url(frontend-assets/img/slider/home-2-02.jpg)">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="slider-text-info style-2 text-center slider-text-animation">
              <h1 class="title1"><span class="text">perfect</span> design</h1>
              <p>Ready. experience. comfortable and indispensable in life</p>
              <div class="slier-btn-1">
                <a title="shop now" href="#" class="shop-btn">Shopping now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-wrapper end -->
    <!-- slider-wrapper start -->
    <div class="slider-wrapper" style="background-image:url(frontend-assets/img/slider/home-2-03.jpg)">
      <div class="container-fluid">
        <div class="row justify-content-end">
          <div class="col-lg-11 col-md-11">
            <div class="slider-text-info style-1 slider-2-style slider-text-animation">
              <h4 class="title1">new arrivals 2018</h4>
              <h1 class="title2"><span>Jacket  </span>TECH PACK</h1>
              <p>Aurora Shell Jacket Is Ready For Any Adventure.</p>
              <div class="slier-btn-1">
                <a title="shop now" href="#" class="shop-btn">Shopping now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-wrapper end -->
  </div>
</div>
<!-- slider-main-area end -->
<!-- banner-area start -->
<div class="banner-area benner-style-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-12 col-sm-12 col-custom-f-4  col-md-4">
        <!--single-banner-box start -->
        <div class="single-banner-box">
          <a href="#"><img src="{{asset('frontend-assets/img/banner/h2-1.jpg')}}" alt=""></a>
        </div>
        <!--single-banner-box end -->
      </div>
      <div class="col-lg-4 col-12 col-sm-12 col-custom-f-4  col-md-4">
        <!--single-banner-box start -->
        <div class="single-banner-box">
          <a href="#"><img src="{{asset('frontend-assets/img/banner/h2-2.jpg')}}" alt=""></a>
        </div>
        <!--single-banner-box end -->
      </div>
      <div class="col-lg-4 col-12 col-sm-12 col-custom-f-4  col-md-4">
        <!--single-banner-box start -->
        <div class="single-banner-box">
          <a href="#"><img src="{{asset('frontend-assets/img/banner/h3-3.jpg')}}" alt=""></a>
        </div>
        <!--single-banner-box end -->
      </div>
    </div>
  </div>
</div>
<!-- banner-area end -->
<!-- product-area start -->
<div class="product-area pt-95">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="section-title sectoin-title-left">
          <!-- product-tabs-list start -->
          <div class="product-tabs-list">
            <ul role="tablist" class="nav">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="best-sellers" href="#best-sellers" class="active show" aria-selected="true">Bestseller</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="on-sellers" href="#on-sellers"> Featured Products</a></li>
            </ul>
          </div>
          <!-- product-tabs-list end -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="tab-content">
          <div id="best-sellers" class="tab-pane active show" role="tabpanel">
            <div class="row">
              <div class="product-active-3 owl-carousel">
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/3.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/4.jpg')}}" alt="">
                      </a>
                      <div class="label-product">-10% off</div>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$225.00</span>
                          <span class="old-price">$250.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/9.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/10.jpg')}}" alt="">
                      </a>
                      <div class="label-product">-10% off</div>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$270.00</span>
                          <span class="old-price">$300.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/11.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/12.jpg')}}" alt="">
                      </a>
                      <div class="label-product">-10% off</div>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$225.00</span>
                          <span class="old-price">$250.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/4.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$150.00</span>
                          <span class="old-price">$180.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/6.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$220.00</span>
                          <span class="old-price">$240.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/10.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/11.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$220.00</span>
                          <span class="old-price">$240.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/3.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$150.00</span>
                          <span class="old-price">$180.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
              </div>
            </div>
          </div>
          <div id="on-sellers" class="tab-pane" role="tabpanel">
            <div class="row">
              <div class="product-active-3 owl-carousel">
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/10.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/9.jpg')}}" alt="">
                      </a>
                      <div class="label-product">-10% off</div>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$225.00</span>
                          <span class="old-price">$250.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/14.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/13.jpg')}}" alt="">
                      </a>
                      <div class="label-product">-10% off</div>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$225.00</span>
                          <span class="old-price">$250.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/4.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/3.jpg')}}" alt="">
                      </a>
                      <div class="label-product">-10% off</div>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$270.00</span>
                          <span class="old-price">$300.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/6.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/5.jpg')}}" alt="">
                      </a>
                      <div class="label-product">-10% off</div>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$225.00</span>
                          <span class="old-price">$250.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/3.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                            <li class="no-star"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$150.00</span>
                          <span class="old-price">$180.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/1.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$220.00</span>
                          <span class="old-price">$240.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
                <div class="col">
                  <!-- single-product-wrap start -->
                  <div class="single-product-wrap">
                    <div class="product-image">
                      <a href="single-product.html">
                        <img class="primary-image" src="{{asset('frontend-assets/img/product/12.jpg')}}" alt="">
                        <img class="secondary-image" src="{{asset('frontend-assets/img/product/11.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="product_desc">
                      <div class="product_desc_info">
                        <div class="rating-box">
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                        <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                        <div class="price-box">
                          <span class="new-price">$220.00</span>
                          <span class="old-price">$240.00</span>
                        </div>
                      </div>
                      <div class="add-actions">
                        <ul class="add-actions-link">
                          <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                          <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                          <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- single-product-wrap end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- product-area end -->
<!-- newsletter-area start -->
<div class="newsletter-area ptb-95">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="newsletter-inner text-center newsletter-bg">
          <h4 class="text">Join our</h4>
          <h2>Newsletters now!</h2>
          <p class="desc">Subscribe to the Juta mailing list to receive updates on new arrivals, offers and other discount information.</p>
          <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newletter-input popup-subscribe-form validate" target="_blank" novalidate>
            <input id="mc-email" type="email" autocomplete="off" placeholder="Your email address">
            <button id="mc-submit" type="submit" class="btn btn-primary"><span>Subscribe !</span></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- newsletter-area end -->
@endsection
@section('script')
@endsection
