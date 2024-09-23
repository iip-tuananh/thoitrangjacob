<footer>
   <div class="footer-main">
         <div class="row row-mainlinks">
         <div class="column small-12 medium-4 large-4 tile-column">
            <div class="tile-content">
               <div class="row align-top">
                     <div class="column align-self-top mt-3" tabindex="0">
                     <p class="h3" >Form nhận tư vấn</p>
                     <form class="footerEmailSignupForm" id="footerEmailSignupDesktop" action="{{route('postcontact')}}" method="POST">
                        @csrf
                        <div class="input-group">
                           <div class="input-vertical-group">
                                 <input class="input-group-field" id="emailFooter" name="email" type="text" aria-label="Email đăng kí tư vấn" placeholder="Email đăng kí tư vấn" required>
                           </div>
                           <div id="footerEmailSignupButton" class="input-group-button">
                                 <button role="button" class="button input-btn-link" type="submit">Đăng ký</button>
                           </div>
                        </div>
                     </form>
                     <hr class="mt-4 show-for-small-only mobile-hline" />
                     </div>
               </div>
            </div>
         </div>
         <div class="column small-12 medium-4 large-4 tile-column">
            <div class="tile-content">
               <div class="row align-top">
                     <div class="column align-self-top mt-3" tabindex="0">
                     <p class="h3" >Tuyển sỉ</p>
                     <a class="button mb-2" href="tel:{{$setting->phone1}}">Liên hệ ngay</a>
                     <hr class="mt-4 show-for-small-only mobile-hline" />
                     </div>
               </div>
            </div>
         </div>
         <div class="column small-12 medium-4 large-4 tile-column">
            <div class="tile-content">
               <div class="row align-top">
                     <div class="column align-self-top mt-2">
                     <div class="row align-middle pl-2 pr-1 mb-1 show-for-large">
                        <div class="column small-2">
                           <span aria-label="Status Logo" class="icon icon-statuslogo" alt="Status Logo" style="font-size:45px" tabindex="0"></span>
                        </div>
                        <div class="column pr-2 small-10">
                           <p class="h3" tabindex="0">Hỗ trợ set up cửa hàng</p>
                        </div>
                     </div>
                     <div class="row align-middle pl-1 pr-1 mb-1 show-for-medium-only">
                        <div class="column small-4">
                           <span aria-label="Status Logo" class="icon icon-statuslogo" alt="Status Logo" style="font-size:45px" tabindex="0"></span>
                        </div>
                        <div class="column pr-2 small-8">
                           <p class="h3" tabindex="0">Hỗ trợ set up cửa hàng</p>
                        </div>
                     </div>
                     <div class="row align-middle pl-1 pr-0 show-for-small-only mt-1 mb-1">
                        <div class="column small-2">
                           <span aria-label="Status Logo" class="icon icon-statuslogo" alt="Status Logo" style="font-size:40px" tabindex="0"></span>
                        </div>
                        <div class="column small-10">
                           <p class="h3" tabindex="0">Hỗ trợ set up cửa hàng</p>
                        </div>
                     </div>
                      <a class="button mb-2" href="tel:{{$setting->phone1}}">Gọi ngay</a>
                     <hr class="mt-4 show-for-small-only mobile-hline" />
                     </div>
               </div>
            </div>
         </div>
         </div>
         <div class="row row-secondarylinks">
         <div class="column">
            <div class="row footer-lists  pb-3">
               <div class=" vertical medium-3 align-top mb-2 pr-2 pr-medium-0">
                     <h4 class="align-self-middle all-caps" style="border-bottom: 1px solid black; display: inline;">Thông tin doanh nghiệp</h4>
                     <div class=" vertical children">
                        <p>{{$setting->webname}}</p>
                        <p>Địa chỉ: {{$setting->address1}}</p>
                        @if ($setting->address2)
                        <p>Địa chỉ 2: {{$setting->address2}}</p>
                        @endif
                        <p>Hotline: <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></p>
                        @if ($setting->phone2)
                        <p>Số tuyển sỉ: <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></p>
                        @endif
                        @if ($setting->phone3)
                        <p>Số hỗ trợ setup: <a href="tel:{{$setting->phone3}}">{{$setting->phone3}}</a></p>
                        @endif
                        <p>Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                     </div>
               </div>
               <ul class="menu vertical medium-3 align-top mb-2 pr-2 pr-medium-0">
                     <li>
                     <h4 class="align-self-middle all-caps" style="border-bottom: 1px solid black;">Chính sách hỗ trợ</h4>
                     <ul class="menu vertical children">
                        @foreach ($helpCustomer as $item)
                           <li><a href="{{route('helpCus', ['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                        @endforeach
                     </ul>
                     </li>
               </ul>
               <ul class="menu vertical medium-3 align-top mb-2 pr-2 pr-medium-0">
                     <li>
                     <h4 class="align-self-middle all-caps" style="border-bottom: 1px solid black;">FanPage</h4>
                     <div class="fb-page" 
                        data-href="{{$setting->facebook}}"
                        data-width="380" 
                        data-hide-cover="false"
                        data-show-facepile="false"></div>
                     </li>
               </ul>
               <ul class="menu vertical medium-3 align-top mb-2 pr-2 pr-medium-0">
                     <li>
                     <h4 class="align-self-middle all-caps" style="border-bottom: 1px solid black;">Google map</h4>
                     {!!$setting->iframe_map!!}
                     </li>
               </ul>
            </div>
         </div>
         </div>
         <hr class="separator footer-separator">
         <div class="row footer-copy-info flex-dir-column-reverse  medium-flex-dir-row mb-medium-4 mb-5">
 
         <div class="columns social">
            <ul class="menu align-center footer-social-icons">
               <li><a aria-label="tik tok" href="https://www.tiktok.com/"><span class="icon icon-tiktok">&nbsp;</span> </a></li>
               <li><a aria-label="instagram" href="https://www.instagram.com/" twitter=""><span class="icon icon-jd-instagram">&nbsp;</span> </a></li>
               <li><a aria-label="facebook" href="{{$setting->facebook}}" style="margin-left:-6px"><span class="icon icon-jd-fb">&nbsp;</span> </a></li>
               <li><a aria-label="twitter" href="https://twitter.com/"><span class="icon icon-jd-twitter">&nbsp;</span> </a></li>
               <li><a aria-label="youtube" href="https://www.youtube.com/"><span class="icon icon-youtube">&nbsp;</span> </a></li>
            </ul>
            <style type="text/css">html.jdsports-page  .BVRRDisplayContentHeaderNoReviews .BVRRDisplayContentLinkWrite a {
               color: #000000 !important;
               border: 2px solid #000 !important;
               border-radius: 0 !important;
               font-family: Gotham Bold !important;
               transition: background-color .25s ease-out,color .25s ease-out;
               }
               html.jdsports-page  .BVRRDisplayContentHeaderNoReviews .BVRRDisplayContentLinkWrite a:hover {
               color: #FFF !important;
               border: 2px solid #000 !important;
               border-radius: 0 !important;
               font-family: Gotham Bold !important;
               transition: background-color .25s ease-out,color .25s ease-out;
               background-color: #000 !important;
               }
            </style>
         </div>
         </div>
   </div>
   <div class="custom-small reveal" id="theEmailModal" data-reveal data-close-on-click="true">
         <div class="modal-header">
         <div class="h1"></div>
         </div>
         <div class="messageContent"></div>
         <button class="close-icon" data-close aria-label="Close Modal"></button>
   </div>
</footer>