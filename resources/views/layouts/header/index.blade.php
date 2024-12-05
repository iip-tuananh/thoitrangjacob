<div class="header-main header-standard">
   <div class="row align-middle">
   <div class="column text-center medium-text-left medium-4 large-5 show-for-medium">
      <a href="{{route('home')}}"  class="main-jd-logo">
         <span class="hide-for-small-only">
         <img src="{{$setting->logo}}" class="main-logo m-0" alt="{{$setting->company}}"  height="55px" width="55px" loading="lazy"/>
         </span>
         <!-- image mobile header -->
         <span class="show-for-small-only text-center">
         <img src="{{$setting->logo}}" srcset="{{$setting->logo}}" alt="" height="30px" width="42px" loading="lazy"/>
         </span>
      </a>
   </div>
   <div class="column header-navigation small-12 show-for-small-only text-center">
      <div class="header-flex-container">
         <div class="header-flex-item hide-on-active">
               <a id="mobileHeaderShop" href="javascript:void(0)" aria-label="Shop menu"
               ><span class="header-icon icon icon-large icon-hamburger-v2"></span></a
               >
         </div>
         {{-- <div class="header-flex-item is-relative hide-on-fixed">
               <a id="mobileHeaderSearch" href="javascript:void(0)" aria-label="Open Search"
               ><span class="header-icon icon icon-large icon-jd-search"></span></a
               >
               <div class="diamond"></div>
         </div> --}}
         <div class="header-flex-item hide-on-fixed">
               <a href="{{route('home')}}" aria-label="{{$setting->company}}">
               <img style="width: 170px;" src="{{$setting->logo}}" srcset="{{$setting->logo}}" alt="{{$setting->company}}"/>
               </a>
         </div>
         <div class="header-flex-item show-on-fixed search-flex-group">
               <form method="POST" action="{{route('search_result')}}">
                  @csrf
                  <span class="header-icon icon icon-search"></span>
                  <input type="search" aria-label="Tìm kiếm" placeholder="Tìm kiếm sản phẩm ..." autocomplete="off" name="keyword"/>
               </form>
         </div>
         <div class="header-flex-item hide-on-active">
               <a
               href="javascript:void(0)"
               class="js-cart-link"
               aria-label="Bag"
               data-status-loaded="false"
               >
               <span class="header-icon icon icon-large icon-jd-checkout has-corner-badge" >
                  @if (count($cartcontent) > 0)
                     <span class="count-cart">{{count($cartcontent)}}</span>
                  @else
                     <span class="count-cart" style="display:none;"></span>
                  @endif
               </span>
               </a>
         </div>
         <div class="header-flex-item show-on-active">
               <a id="close-menu" href="javascript:void(0)" aria-label="Close Search">
               <div  class="icon icon-close-x"></div>
               </a>
         </div>
      </div>
   </div>
   <div class="column header-navigation hide-for-small-only medium-8 large-7">
      <ul class="no-bullet">
         <form action="{{route('search_result')}}" method="POST" class="searchBarForm">
            <li class="fill-width search-form-container">
                  @csrf
               <ul>
                  <li class="fill-width"><input type="text" title="Tìm kiếm" aria-label="Tìm kiếm" placeholder="Tìm kiếm sản phẩm ..." autocomplete="off" name="keyword"/></li>
               </ul>
            </li>
            <li class="button hover-effect" ><button type="submit" style="font-size: 13px">Tìm</button></li>
         </form>
         <li class="is-relative">
               <div class="no-bullet">
               <li id="basket-nav" class="has-corner-badge js-dynamic-cart hover-effect">
                  <a href="{{route('listCart')}}" class="button small hollow black nav-last hide-for-small-only js-cart-link" data-status-loaded="false">
                  <span class="icon icon-jd-checkout"></span>
                  <span class="navigation-label">GIỎ HÀNG</span>
                  @if (count($cartcontent) > 0)
                     <span class="count-cart">{{count($cartcontent)}}</span>
                  @else
                     <span class="count-cart" style="display:none;"></span>
                  @endif
                  </a>
                  <div id="dynamicCartWrapper">
                  </div>
               </li>
               <li class="button hover-effect form-contact"><span style="font-size: 13px">Tư vấn</span></li>
               </div>
         </li>
      </ul>
   </div>
   </div>
</div>
<nav id="headerMainMenu" class="hide-for-small-only">
   <!-- Final Megamenu Path - /NewMegaMenu -->
   <!-- cacheMegaMenu -->
   <div class="row align-middle">
   <ul id="desktop-mainmenu" class="menu main-menu medium-12">
      <li>
         <img src="" alt="Bộ sưu tập" class="hide">
         <a href="{{route('allProduct')}}" class="text-center" data-toplayer="true">Bộ sưu tập</a>
         <input type="text" class="homeCategoryOverride hide" value="Bộ sưu tập">
         <input type="text" class="moveHomeLinktoTop hide"  value="true">
         <div class="menu-dropdown align-middle hide">
               <div class="row align-top menu-dropdown-row">
               <div class="columns">
                  <div class="navigation-promo-container" id="NavigationPromoContainer_1">
                     @foreach ($categoryhome as $cate)
                     <div>
                           <div class="navigation-promo-slide" id="mensnewpromo1">
                           <div  aria-label="{{languageName($cate->name)}}" class="navigation-promo-image" style="background-image: url('{{$cate->avatar}}');" onclick="window.location='{{route('allListProCate', ['cate'=>$cate->slug])}}'"></div>
                           <div class="navigation-promo-cta">
                              <img src="{{$cate->avatar}}" alt="{{languageName($cate->name)}}" class="hide">
                              <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                           </div>
                           </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               </div>
         </div>
      </li>
      <li>
         <img src="" alt="" class="hide">
         <a href="" class="show-for-small-only text-center" data-toplayer="true"></a>
         <a href="" class="hide-for-small-only text-center" data-toplayer="true">Danh mục sản phẩm</a>
         <input type="text" class="homeCategoryOverride hide" value="Danh mục sản phẩm">
         <input type="text" class="moveHomeLinktoTop hide"  value="false">
         <div class="menu-dropdown align-middle hide">
            <div class="row align-top menu-dropdown-row">
               @foreach ($categoryhome as $cate)
                  <div class="medium-2 columns megaMenuLinkContainer">
                     <ul class="menu vertical">
                        <li class="static-title"><strong class="p-0">
                           <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                        </strong></li>
                        @foreach ($cate->typeCate as $typeCate)
                        <li><a href="{{route('allListProType', ['cate'=>$typeCate->cate_slug, 'type'=>$typeCate->slug])}}" title="{{languageName($typeCate->name)}}">{{languageName($typeCate->name)}}</a></li>
                        @endforeach
                     </ul>
                  </div>
               @endforeach
               <div class="medium-2 columns megaMenuLinkContainer">
                  <ul class="menu vertical">
                     <li class="static-title"><strong class="p-0">Thương hiệu</strong></li>
                     @foreach ($productBrands as $brand)
                        @if (count(json_decode($brand->cate_id)) > 0)
                           @foreach (json_decode($brand->cate_id) as $item)
                              @if ($item == $cate->id)
                              <li><img src="" alt="{{$brand->name}}" class="hide"><a class="" href="{{route('listProductBrand', ['slug'=>$brand->slug,'cate'=>$cate->slug])}}">{{$brand->name}}</a></li>
                              @endif
                           @endforeach
                        @endif
                     @endforeach
                  </ul>
               </div>
            </div>
         </div>
      </li>
   
      <li data-mainitem="Thương hiệu">
         <img src="" alt="Thương hiệu" class="hide">
         <a href="{{route('allProductBrand')}}" class="text-center" data-toplayer="true">Thương hiệu</a>
         <input type="text" class="homeCategoryOverride hide" value="Thương hiệu">
         <input type="text" class="moveHomeLinktoTop hide"  value="false">
         <div class="menu-dropdown align-middle hide">
            <div class="row align-top menu-dropdown-row">
               <div class="row icon-list align-center">
                  @foreach ($productBrands as $brand)
                     <div class="medium-1 brands nike">
                        <a href="{{route('listProductBrand', ['slug'=>$brand->slug, 'cate'=>'all'])}}" title="{{$brand->name}}"><img src="{{$brand->image}}" alt="Nike"></a>
                     </div>
                  @endforeach
               </div>
            </div>
            <div class="row icon-list view-all-brands align-center mt-3">
               <div class="medium-12">
                  <a href="{{route('allProductBrand')}}" class="jd">Xem tất cả</a>
               </div>
            </div>
         </div>
      </li>
      <li data-mainitem="Về chúng tôi">
         <img src="" alt="Về chúng tôi" class="hide">
         <a href="{{route('aboutUs')}}" class="text-center" data-toplayer="true">Về chúng tôi</a>
         <input type="text" class="homeCategoryOverride hide" value="">
         <input type="text" class="moveHomeLinktoTop hide"  value="false">
      </li>
      <li data-mainitem="Chính sách hỗ trợ đại lý">
         <img src="" alt="Chính sách hỗ trợ đại lý" class="hide">
         <a href="#" class="text-center" data-toplayer="true">Chính sách hỗ trợ đại lý</a>
         <input type="text" class="homeCategoryOverride hide" value="">
         <input type="text" class="moveHomeLinktoTop hide"  value="false">
         <div class="menu-dropdown align-middle hide">
               <div class="row align-top menu-dropdown-row">
               <div class="columns">
                  <div class="navigation-promo-container" id="NavigationPromoContainer_2">
                     @foreach ($helpCustomer as $item)
                        <div>
                              <div class="navigation-promo-slide" id="sale_nav1">
                              <div  aria-label="{{$item->title}}" class="navigation-promo-image" style="background-image: url({{$item->image}});" onclick="window.location='{{route('helpCus', ['slug'=>$item->slug])}}'"></div>
                              <div class="navigation-promo-cta">
                                 <img src="{{$item->image}}" alt="{{$item->title}}" class="hide">
                                 <a href="{{route('helpCus', ['slug'=>$item->slug])}}">{{$item->title}}</a>
                              </div>
                              </div>
                        </div>
                     @endforeach
                  </div>
               </div>
               </div>
         </div>
      </li>
      {{-- <li data-mainitem="Releases">
         <img src="" alt="Releases" class="hide">
         <a href="/store/sneaker-release-dates?mnid=release_calendar" class="text-center" data-toplayer="true">Releases</a>
         <input type="text" class="homeCategoryOverride hide" value="">
         <input type="text" class="moveHomeLinktoTop hide"  value="false">
      </li> --}}
      <li data-mainitem="Tin tức">
         <img src="" alt="Tin tức" class="hide">
         <a href="{{route('allListBlog')}}" class="text-center" data-toplayer="true">Tin tức</a>
         <input type="text" class="homeCategoryOverride hide" value="">
         <input type="text" class="moveHomeLinktoTop hide"  value="false">
      </li>
      <div id="megaMenuBoss">
         <div id="containerMenuBoss" class="menu-dropdown"></div>
      </div>
   </ul>
   </div>
</nav>