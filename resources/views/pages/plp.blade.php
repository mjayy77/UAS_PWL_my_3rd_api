@extends('layouts.app-public')
@section('title', 'Shop')
@section('content')
<div class="site-wrapper-reveal">
  <!-- Product Area Start -->
 <div class="product-wrapper section-space--ptb_90 border-bottom pb-5 mb-5">
      <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-3 order-md-1 order-2 small-mt__40">
                <div class="shop-widget widget-shop-publishers mt-3">
                    <div class="product-filter">
                        <h6 class="mb-20">Company</h6>
                        <select class="_filter form-select form-select-sm" name="_publisher"
                        onchange="getData()">
                            <option value="" selected>All</option>
                            <option value="Yamaha">Yamaha</option>
                            <option value="Fender">Fender</option>
                            <option value="Steinway and Sons">Steinway and Sons</option>
                            <option value="Korg">Korg</option>
                            <option value="Gretsch">Gretsch</option>

                        </select>
                    </div>
                </div>
                <!-- Product Filter -->
                <div class="shop-widget widget-color">
                    <div class="product-filter">
                        <h6 class="mb-20">Color</h6>
                        <ul class="widget-nav-list">
                            <li><a href="#"><span class="swatch-color black"></span></a></li>
                            <li><a href="#"><span class="swatch-color green"></span></a></li>
                            <li><a href="#"><span class="swatch-color grey"></span></a></li>
                            <li><a href="#"><span class="swatch-color red"></span></a></li>
                            <li><a href="#"><span class="swatch-color white"></span></a></li>
                            <li><a href="#"><span class="swatch-color yellow"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Product Filter -->
                <div class="shop-widget">
                    <div class="product-filter widget-price">
                        <h6 class="mb-20">Prices</h6>
                        <ul class="widget-nav-list">
                            <li><a href="#">Under IDR 1 Mil</a></li>
                            <li><a href="#">IDR 1 Mil - IDR 10 Mil</a></li>
                            <li><a href="#">IDR 10 Mil - 50 Mil</a></li>
                            <li><a href="#">Above IDR 50 Mil</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Product Filter -->
                <div class="shop-widget">
                    <div class="product-filter">
                        <h6 class="mb-20">Tags</h6>
                        <div class="blog-tagc loud">
                            <a href="#" class="selected">Instruments</a><br>
                            <a href="#">Imported</a><br>
                            <a href="#">Best Seller</a><br>
                            <a href="#">Best Price</a><br>
                            <a href="#">High Quality</a><br>
                            <a href="#">Recommended</a><br>
                            <a href="#">Classics</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 order-md-2 order-1">
                <div class="row mb-5">
                    <div class="col-lg-6 col-md-8">
                        <div class="shop-toolbar__items shop-toolbar__item--left">
                            <div class="shop-toolbar__item shop-toolbar__item--result">
                                <p class="result-count"> 
                                    Showing <span id="products_count_start"></span>-<span 
                                    id="products_count_end"></span>
                                    of <span id="products_count_total"></span>
                                </p>
                            </div>
                            <div class="shop-toolbar__item">
                                <select class="_filter form-select form-select-sm"
                                name="_sort_by" onchange="getData()">
                                    <option value="title_asc">Sort by A-Z</option>
                                    <option value="title_desc">Sort by Z-A</option>
                                    <option value="latest_publication">Sort by latest</option>
                                    <option value="latest_added">Sort by time added</option>
                                    <option value="price_asc">Sort by price: low to high</option>
                                    <option value="price_desc">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="header-right-search">
                            <div class="header-search-box">
                                <input class="_filter search-field" name="_search"
                                type="text"
                                        onkeypress="getDataOnEnter(event)"
                                        placeholder="Search for instruments...">
                                <button class="search-icon"><i class="icon-magnifier"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row" id="product-list"></div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="page-pagination text-center mt-40"
                            id="product-list-pagination"></ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
  </div>
</div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{asset('pages/js/plp.js')}}"></script>
@endsection