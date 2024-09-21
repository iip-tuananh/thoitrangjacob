
<!DOCTYPE html>
<html lang="en-US" class="jdsports-page">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="description" content="">
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="ahometh.vn" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="ahome-noi-that" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/0e00e78863e5046f2698415aaf4337aa.app.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/amplience-sdk-client.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/swiper.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/pagination.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/8fff4db73c200d941da0b256943dd4ba.style-guide-jd.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/callbutton.css')}}">
   @yield('css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Faustina:wght@500&display=swap" rel="stylesheet">
</head>
      <body id="home nogrid " class="index responsive-site jdsports-page " data-twttr-rendered="true">
         <a href="#skippedNavigation" id="skipNavigationLink">Skip Main Navigation</a>
         <div id="pageOverlay" style="display:none">
            <img class="spinner-icon large" src="" width="150px" height="150px"/>
         </div>
         <div class="off-canvas-wrapper">
         <div class="off-canvas position-left" id="offCanvasLeftSlider" data-transition="overlap" data-off-canvas data-content-scroll="false"></div>
         <div class="off-canvas position-right" id="offCanvasRightSlider" data-transition="overlap" data-off-canvas data-content-scroll="false" data-trap-focus="true"></div>
         <div class="off-canvas position-bottom" id="offCanvasBottomSlider" data-transition="overlap" data-off-canvas data-content-scroll="false"></div>
         <div class="off-canvas position-left" id="offCanvasMobileMenu" data-transition="overlap" data-off-canvas data-content-scroll="false"></div>
         <div class="off-canvas-content" data-off-canvas-content>
               <div class="body-wrapper">
                  <div class="jdsite_id"></div>
                  @include('layouts.header.index')
                  @yield('content')
                  @include('layouts.footer.index')
                  <div id="button-contact-vr" class="">
                     <div id="gom-all-in-one"><!-- v3 -->
                     <!-- map -->
                     <div id="map-vr" class="button-contact">
                     <div class="phone-vr">
                     <div class="phone-vr-circle-fill"></div>
                     <div class="phone-vr-img-circle">
                     <a target="_blank" href="https://maps.app.goo.gl/DJaGbq3LcT2brYLx7">				
                     <img alt="google map" src="{{url('frontend/img/showroom4.png')}}">
                     </a>
                     </div>
                     </div>
                     </div>
                     <!-- end map -->
                     <!-- zalo -->
                     <div id="zalo-vr" class="button-contact">
                     <div class="phone-vr">
                     <div class="phone-vr-circle-fill"></div>
                     <div class="phone-vr-img-circle">
                     <a target="_blank" href="https://zalo.me/{{$setting->phone1}}">				
                     <img alt="Zalo" src="{{url('frontend/img/zalo.png')}}">
                     </a>
                     </div>
                     </div>
                     </div>
                     <!-- end zalo -->
                     <!-- Phone -->
                     <div id="phone-vr" class="button-contact">
                     <div class="phone-vr">
                     <div class="phone-vr-circle-fill"></div>
                     <div class="phone-vr-img-circle">
                     <a href="tel:{{$setting->phone1}}">				
                     <img alt="Phone" src="{{url('frontend/img/phone.png')}}">
                     </a>
                     </div>
                     </div>
                     </div>
                     <div class="phone-bar phone-bar-n">
                     <a href="tel:{{$setting->phone1}}">
                     <span class="text-phone">{{$setting->phone1}}</span>
                     </a>
                     </div>
                     <!-- end phone -->
                     </div><!-- end v3 class gom-all-in-one -->
                     </div>
               </div>
               {{-- <div class="modal-contact">
                  <div class="modal-contact-content">
                     <div class="section right_contact">
                        <h4 class="text-center">
                           Nhập thông tin của bạn để được tư vấn
                        </h4>
                        <div id="pagelogin">
                           <form action="{{route('postcontact')}}" id="contact" method="post">
                              @csrf
                              <div class="form-signup clearfix">
                                 <div class="row group_contact">
                                    <fieldset class="medium-6 small-12 column">
                                       <input placeholder="Tên của bạn" type="text" class="form-control  form-control-lg" required value="" name="name">
                                    </fieldset>
                                    <fieldset class="medium-6 small-12 column">
                                       <input placeholder="Số điện thoại" type="text" class="form-control form-control-lg" id="Phone" value="" name="phone">
                                    </fieldset>
                                    <fieldset class="medium-6 small-12 column">
                                       <input placeholder="Email" type="email" required id="email1" class="form-control form-control-lg" value="" name="email">
                                    </fieldset>
                                    <fieldset class="medium-6 small-12 column">
                                       <input placeholder="Địa chỉ" type="text" class="form-control form-control-lg" id="Address" value="" name="address">
                                    </fieldset>
                                    <fieldset class="medium-12 small-12 column">
                                       <textarea placeholder="Nội dung" name="mess" id="comment" class="form-control content-area form-control-lg" rows="2" Required></textarea>
                                    </fieldset>
                                    <fieldset class="medium-12 small-12 column text-center">
                                       <button type="submit" class="btn btn-form-contact">Gửi ngay </button>
                                       <a class="btn btn-form-contact close-contact">Đóng </a>
                                    </fieldset>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="text-center mt-4">
                           <h5>Hoặc liên hệ với chúng tôi</h5>
                           <p>Hotline: <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></p>
                           <p>Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                           <p>Facebook: <a href="{{$setting->facebook}}">{{$setting->facebook}}</a></p>
                        </div>
                        </div>
                  </div>
               </div> --}}
               <script src="{{asset('frontend/js/classic.release.js')}}"></script>
               <script src="{{asset('frontend/js/api.js')}}"></script>
               <script src="{{asset('frontend/js/3f33548c9952064759fb272d49ee7cd6.style-guide.min.js')}}"></script>
               <script src="{{asset('frontend/js/9d597865277adae94b63cb4d7760ada0.vendor.min.js')}}"></script>
               <script src="{{asset('frontend/js/5345593c953b268a34c5fe579d368717.app.min.js')}}"></script>
               <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
               <script src="{{asset('frontend/js/notify.min.js')}}"></script>
               <div id="fb-root"></div>
               <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="wOiI540C"></script>
               @yield('js')
               <script>
                  $('.add-to-cart').click(function() {
                     var id = $(this).data('id');
                     var url = $(this).data('url');
                     var color = $('.mySwiper3 .swiper-slide.selected').data('color');
                     var size = $('.list-size .box-size.selected').data('title');
                     $.ajax({
                        type: 'POST',
                        url: url,
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {id:id, color:color, size:size},
                        success: function(data) {
                           $.notify("Thêm vào giỏ hàng thành công!", "success");
                           let countCart = Object.keys(data).length;
                           $('#basket-nav .count-cart').attr('display', 'block');
                           $('#basket-nav .count-cart').append(countCart);
                        },
                        error: function(data) {
                           $.notify("Thêm vào giỏ hàng thất bại!", "error");
                        }
                     })
                  })
               </script>
               <script>
                  $(document).ready(function () {
                     var modal = $('.modal-contact');
                     var btn = $('.form-contact');
            
                     $('.form-contact').click(function () {
                        modal.show();
                     });
                     $('.close-contact').click(function () {
                        modal.hide();
                     });
                     $(window).on('click', function (e) {
                        if ($(e.target).is('.modal-contact')) {
                           modal.hide();
                        }
                        $('html body').css('overflow', 'scroll');
                     });
                  });
                  function windowShow()
                  {
                     $('.modal-contact').show();
                     $('html body').css('overflow', 'hidden');
                     setTimeout(windowHide, 30000);
                  }
                  function windowHide()
                  {
                     $('.modal-contact').hide();
                     $('html body').css('overflow', 'scroll');
                  }
                  setTimeout(windowShow, 2000);
               </script>
               <script>
                  $(document).ready(function () {
                     var modal = $('.modal-combo');
                     var btn = $('.quick-view');
                     var span = $('.close-combo');
         
                     $('.quick-view').click(function () {
                        var id = $(this).data('id');
                        var url = $(this).data('url');
                        $.ajax({
                           type: 'post',
                           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                           data: {id: id},
                           url: url,
                           success: function(data) {
                           $('.modal-combo-content').html(data.html);
                           $('.modal-combo').show();         
                           }, 
                           error: function(data) {
                              console.log('lỗi');
                           }
                        })
                     });
                     span.click(function () {
                        modal.hide();
                     });
                     $(window).on('click', function (e) {
                        if ($(e.target).is('.modal-combo')) {
                           modal.hide();
                        }
                     });
                     });
               </script>
               <script>
                  $('.product-combo-slide').owlCarousel({
                     loop: true,
                     margin: 10,
                     nav: true,
                     responsive:{
                        0:{
                              items:1
                        },
                        600:{
                              items:2
                        },
                        1000:{
                              items:3
                        }
                     }
                  })
                  $('.product-special-slide').owlCarousel({
                     loop: true,
                     margin: 10,
                     nav: true,
                     responsive:{
                        0:{
                              items:2
                        },
                        600:{
                              items:3
                        },
                        1000:{
                              items:4
                        }
                     }
                  })
                  $('.aboutUs-slide').owlCarousel({
                     loop: true,
                     margin: 10,
                     nav: true,
                     autoplay:true,
                     autoplayTimeout:2000,
                     autoplayHoverPause:true,
                     responsive:{
                        0:{
                              items:1
                        },
                        600:{
                              items:1
                        },
                        1000:{
                              items:1
                        }
                     }
                  })
               </script>
               <script type="text/javascript">
                  $(document).foundation();
                  FL.global.init();
               </script>
               <script>
                  jQuery('.errorCallingSetMethod').hide();
               </script>
            </div>
         
</body>
</html>