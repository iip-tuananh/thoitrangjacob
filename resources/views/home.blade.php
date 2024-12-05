@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
   <script>
      $.notify("Gửi đơn hàng thành công!", "success");
   </script>
@endif
@endsection
@section('content')
<div id="skippedNavigation">
   <span id="Ntt_param" class="hide"></span>
   <!-- xmpath {ecr:resourcePath=/content/Web/Test Home/Home - 9.16, ecr:innerPath=null} -->
   <style type="text/css">.mp4Promo .mp4-video-promo {
   padding-top: 49.46%;
   position: relative;
   overflow: hidden;
   visibility: hidden;
   cursor: pointer;
   }
   .slick-slider.slick-initialized .mp4Promo .mp4-video-promo {
   visibility: visible;
   }
   @media only screen and (max-width: 1023px) {
   .mp4Promo .mp4-video-promo {
   padding-top: 57.14%;
   }
   }
   @media only screen and (max-width: 639px) {
   .mp4Promo .mp4-video-promo {
   padding-top: 65.2%;
   }
   }
   .mp4Promo video, .mp4Promo img {
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   height: 100%;
   display: none !important;
   }
   .mp4Promo img {
   width: 100%
   }
   @media only screen and (max-width: 640px) {
   .mp4Promo img.promo-img-mobile {
   display: block !important;
   }
   }
   @media only screen and (min-width: 641px) and (max-width: 1024px) {
   .mp4Promo img.promo-img-tablet {
   display: block !important;
   }
   }
   @media only screen and (min-width: 1025px) {
   .mp4Promo video.promo-video-desktop {
   display: block !important;
   }
   }
   </style>
   <style type="text/css">.is-responsive .carousel.carousel-1 .banner-container {
   margin-left: -13px;
   margin-right: -13px;
   }
   .is-responsive .sale-hero img {
   width: 100%;
   }
   .is-responsive .column.shrink.multi-cta-column {
   width: 18%;
   }
   .is-responsive .carousel .slick-dots {
   bottom: -6px;
   }
   @media only screen and (min-width: 641px) {
   .is-responsive .IconTextPromoContainer .show-for-medium {
   display: inherit!important;
   }
   }
   </style>
   <div id="onePageContent" class="one-column-page">
   
   <div class="row column responsive-promo-carousel ">
      <div id="home_heroslider">
         <div class="carousel carousel-1">
            @foreach ($banners as $banner)
            <div>
               <style type="text/css">
                  @media only screen and (max-width:640px) {
                  #home_hs1 .hero-promotion.lazy-load {
                  background-color: #F2F2F2;
                  }
                  }
                  @media only screen and (min-width:641px) {
                  #home_hs1 .hero-promotion.lazy-load {
                  background-color: #FFFFFF;
                  }
                  }
               </style>
               <div >
                  <div id="home_hs1" class="promotion-for-tracking" >
                     <div class="hero-promotion valign-center halign-center bg-valign-center bg-halign-center small-valign-center small-halign-center small-bg-valign-center small-bg-halign-center" style="background-image: url({{$banner->image}});" onclick="window.location='{{$banner->link}}'">
                           <a href="{{$banner->link}}">
                           </a>
                           <div class="promo-text-container">
                           <div class="promo-text textpos-full text-width-100 small-textpos-full small-text-width-100">
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <div style="height:35px" class="show-for-large"></div>
   <div style="height:25px" class="show-for-medium-only"></div>
   <div style="height:10px" class="show-for-small-only"></div>
   <style>
      .jd-image-grid-container-v2 a {text-decoration:none;}
      .jd-image-grid-container-v2 a:hover .jd-image-grid-promo-image-title-v2 {color:#333;}
   </style>
   <div id="JDImageGridContainerV2_1" class="row jd-image-grid-container-v2">
      @foreach ($typeProHome as $type)
         <div id="JDImageGridPromoImageV2_1" class=" jd-image-grid-promo-image-v2 show-for-medium medium-4 promotion-for-tracking" data-creative="{{$type->avatar}}" data-name="Desktop 1 Midspot">
            <a href="{{route('allListProType',['cate'=>$type->cate_slug, 'type'=>$type->slug])}}" aria-label="Shop Now">
                  <img alt="" data-interchange="[, small], [{{$type->avatar}}, medium]]" loading="lazy" />
                  <div class="bg">
                  <div class="jd-image-grid-promo-image-title-v2">{{languageName($type->name)}}</div>
                  <div class="jd-image-grid-promo-image-cta-v2">Shop Now</div>
                  </div>
            </a>
         </div>
      @endforeach
      @foreach ($typeProHome as $type)
      <div id="JDImageGridPromoImageV2_7" class="hide-for-medium jd-image-grid-promo-image-v2 small-6 medium- promotion-for-tracking" data-creative="{{$type->avatar}}" data-name="Mobile 1 Midspot">
         <a href="{{route('allListProType',['cate'=>$type->cate_slug, 'type'=>$type->slug])}}" aria-label="Shop Now">
               <img alt="" data-interchange="[{{$type->avatar}}, small], [, medium]]" loading="lazy" />
               <div class="bg">
               <div class="jd-image-grid-promo-image-title-v2">{{languageName($type->name)}}</div>
               <div class="jd-image-grid-promo-image-cta-v2">Shop Now</div>
               </div>
         </a>
      </div>
      @endforeach
   </div>
   <div style="height:25px" class="show-for-large"></div>
   <div style="height:25px" class="show-for-medium-only"></div>
   <div style="height:15px" class="show-for-small-only"></div>
   <h3 class="text-center text-uppercase">Đối tượng sản phẩm</h3>
   <style>
      .image-grid-container-v2 a:hover .image-grid-promo-image-title-v2 {color:#333;}
   </style>
   <div id="ImageGridContainerV2_1" class="row image-grid-container-v2">
      @foreach ($categoryhome as $cate)
         <div id="ImageGridPromoImageV2_1" class="small-6 medium-3 image-grid-promo-image-v2 promotion-for-tracking" data-creative="{{$cate->avatar}}" data-name="Fleece">
            <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" aria-label="">
                  <!-- Mobile Webp image -->
                  <!-- Desktop Webp Image -->
                  <picture>
                  <source media="(max-width: 639px)" srcset="{{$cate->avatar}}" type="image/webp">
                  <source media="(min-width: 640px)" srcset="{{$cate->avatar}}" type="image/webp">
                  <img aria-label="Image Description" alt="" data-interchange="[{{$cate->avatar}}, small], [{{$cate->avatar}}, medium]]" loading="lazy" />
                  </picture>
                  <div class="image-grid-promo-image-title-v2">{{languageName($cate->name)}}</div>
                  <div class="image-grid-promo-image-cta-v2"><span></span></div>
            </a>
         </div>
      @endforeach
   </div>
   <div style="height:10px" class="show-for-large"></div>
   <div style="height:5px" class="show-for-medium-only"></div>
   <div style="height:5px" class="show-for-small-only"></div>
   <div id="ResponsiveRFKRecommendation_1" class="xm-recommendation-container">
      <div class="hide recommendation-params">
         <input class="scheme" type="hidden" value="" />
         <input class="pageType" type="hidden" value="" />
         <input class="numberOfRecommendations" type="hidden" value="12" />
         <input class="categoryId" type="hidden" value="" />
         <input class="showRecommendationsFlag" type="hidden" value="false" />
         <input class="largeDisplay" type="hidden" value="slider" />
         <input class="widgetId" type="hidden" value="rfkid_BTS_essentials" />
         <input class="recommendationTitle" type="hidden" value="BACK TO SCHOOL ESSENTIALS" />
         <input class="eventTitle" type="hidden" value="" />
      </div>
   </div>
   <div style="height:30px" class="show-for-large"></div>
   <div style="height:30px" class="show-for-medium-only"></div>
   <div style="height:30px" class="show-for-small-only"></div>
   <div id="home_brandbar">
      <div class="row">
         <div class="brand-bar-carousel">
            @foreach ($productBrands as $brand)
               <div class="column brand-link-icon">
               <div id="BrandBarLink_1">
                  <a aria-label="{{$brand->name}}" href="{{route('listProductBrand', ['slug'=>$brand->slug, 'cate'=>'all'])}}">
                     <img src="{{$brand->image}}" alt="" loading="lazy">
                  </a>
               </div>
               </div>
            @endforeach
         </div>
      </div>
      <div class="row column text-center mb-4 pt-2 show-for-small-only">
         <a href="{{route('allProductBrand')}}" class="button promo">Tất Cả Thương Hiệu<span></span></a>
      </div>
      <div class="row column text-center mb-4 pt-2 show-for-medium-only">
         <a href="{{route('allProductBrand')}}" class="button promo">Tất Cả Thương Hiệu<span></span></a>
      </div>
      <div class="row column text-center mb-4 pt-2 show-for-large">
         <a href="{{route('allProductBrand')}}" class="button promo">Tất Cả Thương Hiệu<span></span></a>
      </div>
   </div>
   <div style="height:40px" class="show-for-large"></div>
   <div style="height:20px" class="show-for-medium-only"></div>
   <div style="height:0px" class="show-for-small-only"></div>
   @if ($bannerAds[1])
      <div class="row column">
         <div id="ResponsivePromoBanner-3images_2" class="promotion-for-tracking" data-creative="{{$bannerAds[1]->image}}" data-name="">
            <a href="{{$bannerAds[1]->name}}" class="promo-banner">
            <img loading="lazy" alt="" aria-label="" data-interchange="[{{$bannerAds[1]->image}}, small], [{{$bannerAds[1]->image}}, medium], [{{$bannerAds[1]->image}}, large]" alt="">
            </a>
         </div>
      </div>
   @endif
   <div style="height:10px" class="show-for-large"></div>
   <div style="height:5px" class="show-for-medium-only"></div>
   <div style="height:5px" class="show-for-small-only"></div>
   <div style="height:10px" class="show-for-large"></div>
   <div style="height:5px" class="show-for-medium-only"></div>
   <div style="height:5px" class="show-for-small-only"></div>
   <div id="product-combo">
      <div class="row">
         <div class="column small-12">
               <h3 class="text-center text-uppercase">Combo sản phẩm</h3>
         </div>
      </div>
      <div class="row" style="position: relative;">
         <div class="product-combo-slide owl-carousel owl-theme">
            @foreach ($comboProduct as $combo)
            <div class="item">
               <div class="item-image">
                  <a href="javascript:void(0);" class="quick-view" data-id="{{$combo->id}}" data-url="{{route('listComboPro')}}">
                     <img src="{{$combo->image}}" alt="{{$combo->name}}" loading="lazy">
                  </a>
               </div>
               <div class="item-info text-center">
                  <a href="javascript:void(0);" class="quick-view" data-id="{{$combo->id}}" data-url="{{route('listComboPro')}}">Xem chi tiết</a>
               </div>
            </div>
            @endforeach
         </div>
         <div class="modal-combo">
            <span class="close-combo">&times;</span>
            <div class="modal-combo-content">
            </div>
         </div>
      </div>
   </div>
   <div id="home-product">
      <div class="row">
         <div class="column small-12">
               <h3 class="text-center text-uppercase">Sản phẩm nổi bật</h3>
         </div>
      </div>
      <div class="row">
            <div class="product-special-slide owl-carousel owl-theme">
               @foreach ($homeProduct as $product)
               <div class="item" style="padding: 15px;">
                  @include('layouts.product.item', ['product'=>$product])
               </div>
               @endforeach
            </div>
      </div>
   </div>
   <style>
      .image-grid-container-v2 a:hover .image-grid-promo-image-title-v2 {color:#333;}
   </style>
   <div id="ImageGridContainerV2_2" class="row image-grid-container-v2">
      @foreach ($bannerProHot as $banner)
      <div id="hp_tile_1" class="small-6 medium-6 image-grid-promo-image-v2 promotion-for-tracking" data-creative="{{$banner->image}}" data-name="">
         <a href="{{$banner->name}}" aria-label="">
               <!-- Mobile Webp image -->
               <!-- Desktop Webp Image -->
               <picture>
               <source media="(max-width: 639px)" srcset="{{$banner->image}}" type="image/webp">
               <source media="(min-width: 640px)" srcset="{{$banner->image}}" type="image/webp">
               <img aria-label="" alt="" data-interchange="[{{$banner->image}}, small], [{{$banner->image}}, medium]]" loading="lazy" style="width: 100%" />
               </picture>
         </a>
      </div>
      @endforeach
   </div>
   <style>
      .image-grid-container-v2 a:hover .image-grid-promo-image-title-v2 {color:#333;}
   </style>
   <div style="height:30px" class="show-for-large"></div>
   <div style="height:30px" class="show-for-medium-only"></div>
   <div style="height:15px" class="show-for-small-only"></div>
   <div id="home-product">
      <div class="row">
         <div class="column small-12">
               <h3 class="text-center text-uppercase">Sản phẩm mới</h3>
         </div>
      </div>
      <div class="row">
            <div class="product-special-slide owl-carousel owl-theme">
               @foreach ($homeProductNew as $product)
                  <div class="item" style="padding: 15px;">
                     @include('layouts.product.item', ['product'=>$product])
                  </div>
               @endforeach
            </div>
      </div>
   </div>
   <div style="height:20px" class="show-for-large"></div>
   <div style="height:20px" class="show-for-medium-only"></div>
   <div style="height:20px" class="show-for-small-only"></div>
   <style type="text/css">#hpSeoCopy .seo-header {
      font-family: 'Faustina', serif;
      font-size: 28px;
      font-weight: 600;
      line-height: 1;
      text-transform: uppercase;
      letter-spacing: 0px;
      }
      #hpSeoCopy ul {
      list-style: none;
      margin: 0;
      }
      #hpSeoCopy ul a {
      text-decoration: none;
      }
      #hpSeoCopy ul a:hover {
      text-decoration: underline;
      color: #333;
      }
   </style>
   <div class="is-responsive" id="hpSeoCopy">
      <div class="row column mb-3">
         <h1 class="seo-header">Về chúng tôi</h1>
      </div>
      <div class="row mb-4">
         <div class="column small-12 medium-7 pr-large-5">
               {!!$aboutUs->description!!}
               <div style="margin-top: 40px;">
                  <a href="{{route('aboutUs')}}" class="btn-aboutUs">Xem chi tiết</a>
               </div>
         </div>
         <div class="column small-12 medium-5 mt-2 mt-medium-0">
               <div class="row ml-large-5">
                  <div class="aboutUs-slide owl-carousel owl-theme">
                     @foreach ($prizes as $item)
                        <img src="{{$item->image}}" alt="{{$item->name}}" loading="lazy">
                     @endforeach
                  </div>
               </div>
         </div>
      </div>
   </div>
   </div>
</div>
@endsection