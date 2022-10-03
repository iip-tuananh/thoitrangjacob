@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$imgColor = json_decode($product->size);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<style>
   .swiper {
      width: 100%;
      margin-left: auto;
      margin-right: auto;
   }

   .swiper-slide {
      background-size: cover;
      background-position: center;
   }

   .mySwiper2 {
      height: 80%;
      width: 100%;
   }
   .mySwiper4 {
      height: 80%;
      width: 100%;
   }

   .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
   }

   .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
   }
   .mySwiper3 {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
   }

   .mySwiper3 .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
   }

   .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
   }
   .mySwiper3 .swiper-slide-thumb-active {
      opacity: 1;
   }

   .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
   }

   .swiper-slide img {
      display: block;
      width: 100%;
      /* height: 100%; */
      object-fit: cover;
   }

   .mySwiper3 .swiper-slide.selected {
      border: 1px solid black;
   }
   .list-size {
      display: flex;
      flex-flow: wrap;
   }
   .list-size .box-size{
      padding: 25px 35px;
      border: 1px solid #ccc;
      margin-left: 2px;
      margin-right: 2px;
   }
   .list-size .box-size:hover, .list-size .box-size.selected{
      background-color: #2e2e2e;
      border: 1px solid #2e2e2e;
      color: #fff;
   }
   .product-description .remove-selected {
      float: right;
      font-size: 12px;
      padding: 5px 10px;
      border: 1px solid black;
   }
   .product-description .remove-selected:hover {
      background-color: #2e2e2e;
      border: 1px solid #2e2e2e;
      color: #fff;
      cursor: pointer;
   }
   .add-cart .add-to-cart{
      background-color: #fe0;
      color: #000;
      width: 100%;
      padding: 10px 0;
      font-size: 20px !important;
      font-weight: 700;
   }
   .add-cart {
      margin-top: 20px;
      text-align: center;
   }
   .product-page .title-detail{
      position: static;
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      align-items: center;
      border: none;
      margin-bottom: 0;
      overflow: hidden;
      justify-content: center;
      border-bottom: 1px solid #ccc;
   }
   .product-page .title-detail h2 {
      background-color: #fe0;
      padding: 10px;
      margin-bottom: 0 !important;
   }
   .product-page .product-detail {
      padding: 30px 0;
      max-width: 95.28571rem;
      margin-right: auto;
      margin-left: auto;
   }
</style>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
   var swiper = new Swiper(".mySwiper", {
   spaceBetween: 10,
   slidesPerView: 5,
   freeMode: true,
   watchSlidesProgress: true,
   });
   var swiper3 = new Swiper(".mySwiper3", {
   spaceBetween: 10,
   slidesPerView: 5,
   freeMode: true,
   watchSlidesProgress: true,
   });
   var swiper2 = new Swiper(".mySwiper2", {
   spaceBetween: 10,
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },
   thumbs: {
      swiper: swiper
   },
   });
   var swiper4 = new Swiper(".mySwiper4", {
   spaceBetween: 10,
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },
   thumbs: {
      swiper: swiper3
   },
   });
</script>
<script>
   $('.mySwiper3 .swiper-slide').click(function() {
      var title = $(this).data('title');
      $('.mySwiper3 .swiper-slide').removeClass('selected');
      $(this).addClass('selected');
      $('.mySwiper2').addClass('hide');
      $('.mySwiper4').removeClass('hide');
      $('.color-name').addClass('hide');
      $('.color-name-'+title).removeClass('hide');
   })
   $('.mySwiper .swiper-slide').click(function() {
      $('.mySwiper4').addClass('hide');
      $('.mySwiper2').removeClass('hide');
   })
   $('.list-size .box-size').click(function() {
      var size = $(this).data('size');
      $('.list-size .box-size').removeClass('selected');
      $(this).addClass('selected');
      $('.size-product').addClass('hide');
      $('.size-product-'+size).removeClass('hide');
   })
   $('.remove-selected').click(function() {
      $('.list-size .box-size').removeClass('selected');
      $('.mySwiper3 .swiper-slide').removeClass('selected');
      $('.size-product').addClass('hide');
      $('.color-name').addClass('hide');
   })
</script>
@endsection
@section('content')
<section class="bread-crumb">
   <div class="row">
      <ul class="breadcrumb" >
         <li class="home">
            <a itemprop="item" href="{{route('home')}}" title="Trang chủ" style="margin-right: 6px;">
               <span itemprop="name">Trang chủ</span>
               <meta itemprop="position" content="1" />
            </a>
            <i class="fa-solid fa-caret-right"></i>
         </li>
         <li>
            <a itemprop="item" href="{{route('allProduct')}}" title="{{languageName($product->cate->name)}}" style="margin-right: 6px;margin-left: 6px;">
               <span itemprop="name">{{languageName($product->cate->name)}}</span>
               <meta itemprop="position" content="2" />
            </a>
            <i class="fa-solid fa-caret-right"></i>
         </li>
         <li>
            <a itemprop="item" href="{{route('allProduct')}}" title="{{languageName($product->typeCate->name)}}" style="margin-right: 6px;margin-left: 6px;">
               <span itemprop="name">{{languageName($product->typeCate->name)}}</span>
               <meta itemprop="position" content="2" />
            </a>
            <i class="fa-solid fa-caret-right"></i>
         </li>
         <li style="margin-left: 6px;">
            <strong>
               <span itemprop="name">{{languageName($product->name)}}</</span>
               <meta itemprop="position" content="3" />
            </strong>
         </li>
      </ul>
   </div>
</section>
<section class="product-page">
   <div class="row" style="padding-bottom: 50px;">
      <div class="medium-6 column small-12">
         <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
            <div class="swiper-wrapper">
               @foreach ($imgs as $img)
                  <div class="swiper-slide">
                     <img src="{{$img}}" loading="lazy" />
                  </div>
               @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
         <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper4 hide">
            <div class="swiper-wrapper">
               @foreach ($imgColor as $color)
                  <div class="swiper-slide">
                     <img src="{{$color->image}}" loading="lazy" />
                  </div>
               @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
         <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
               @foreach ($imgs as $img)
                  <div class="swiper-slide">
                     <img src="{{$img}}" loading="lazy" />
                  </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="medium-6 small-12 column">
         <div class="product-name">
            <h3>{{languageName($product->name)}}</h3>
            <p style="font-size: 16px;"><strong>Giá: </strong>
               <span class="price-discount">{{number_format($priceDiscount)}}₫</span>
               @if ($product->discount > 0)
               <span class="price-old">{{number_format($product->price)}}₫</span>
               @endif
            </p>
         </div>
         <div class="product-description">
            <div style="margin-bottom: 20px;">
               <p style="font-size: 16px; display:block;"><strong>Màu sắc</strong>
               @foreach ($imgColor as $key=>$color)
                  <span class="color-name color-name-{{$key}} hide">: {{$color->title}}</span>
               @endforeach
               <span class="remove-selected">Xóa chọn</span>
               </p>
               <div thumbsSlider="" class="swiper mySwiper3">
                  <div class="swiper-wrapper">
                     @foreach ($imgColor as $key=>$color)
                        <div class="swiper-slide" data-title="{{$key}}">
                           <img src="{{$color->image}}" loading="lazy" />
                        </div>
                     @endforeach
                  </div>
               </div>
            </div>
            <p style="font-size: 16px;"><strong>Size</strong>
            @foreach (json_decode($product->preserve) as $key=>$size)
               <span class="size-product size-product-{{$key}} hide">: {{$size->detail}}</span>
            @endforeach
            </p>
            <div class="list-size">
               @foreach (json_decode($product->preserve) as $key=>$size)
                  <div class="medium-2">
                     <div class="box-size" data-size="{{$key}}">
                        <span>{{$size->detail}}</span>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
         <div class="add-cart">
            <button class="add-to-cart">Thêm vào giỏ hàng</button>
         </div>
         <div class="row align-middle pl-2 mt-1">
            <style>
               .logo-status {font-size: 56px;margin-top: 4px;}
               .platform-pc .logo-status {margin-top: 9px;}
            </style>
            <div class="column align-self-top shrink p-0">
               <span tabindex="0" aria-label="Status Logo" class="logo-status icon icon-statuslogo" alt="Status Logo"></span>
            </div>
            <div class="column align-self-top grow">
               <p class="m-0">
                  <span tabindex="0" class="StatusRewardInfo RB-body2">GET POINTS. GAIN ACCESS. BOOST YOUR STATUS. <br> Use your STATUS across our brand family, JD Sports and Finish Line.<br><a href="/status" class="RB-link2">Join STATUS Now</a></span>
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="row title-detail">
      <h2>Thông tin sản phẩm</h2>
   </div>
   <div class="product-detail">
      {!!languageName($product->content)!!}
   </div>
   @if (count($productlq) > 0)
      <div id="home-product">
         <div class="row">
            <div class="column small-12">
                  <h3 class="text-center text-uppercase">Sản phẩm liên quan</h3>
            </div>
         </div>
         <div class="row">
            <div class="product-special-slide owl-carousel owl-theme">
               @foreach ($productlq as $pro)
                  {{-- @if ($pro->id != $product->id) --}}
                     <div class="item" style="padding: 15px;">
                        @include('layouts.product.item', ['product'=>$pro])
                     </div>
                  {{-- @endif --}}
               @endforeach
            </div>
         </div>
      </div>
   @endif
</section>
@endsection