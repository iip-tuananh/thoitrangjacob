
@php
$img = json_decode($product['images']);
$discountPrice = $product['price'] - $product['price'] * ($product['discount'] / 100);
$color = json_decode($product->size);
@endphp
<div class="item-product">
   <div class="item-image">
      <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}">
         <img src="{{$img[0]}}" alt="{{languageName($product->name)}}" loading="lazy">
      </a>
   </div>
   <div class="item-info">
      <div class="product-color">
         <p class="text-product-color">Có {{count($color)}} màu</p>
      </div>
      <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}">{{languageName($product->name)}}</a>
      <p style="margin-bottom: 0;">
         <span class="price-discount">{{number_format($discountPrice)}}₫</span>
         @if ($product->discount > 0)
         <span class="price-old">{{number_format($product->price)}}₫</span>
         @endif
      </p>
      <div class="rating">
         <div class="prSnippetRfk PR-loaded">
            <div class="p-w-r">
               <section id="pr-category-snippets-prod2777487" class="">
                  <div class="pr-snippet pr-category-snippet">
                     <div class="pr-category-snippet__rating pr-category-snippet__item">
                        <div class="pr-snippet-stars pr-snippet-stars-png ">
                           <div aria-hidden="true" class="pr-rating-stars">
                              <div class="pr-star-v4 pr-star-v4-100-filled"></div>
                              <div class="pr-star-v4 pr-star-v4-100-filled"></div>
                              <div class="pr-star-v4 pr-star-v4-100-filled"></div>
                              <div class="pr-star-v4 pr-star-v4-100-filled"></div>
                              <div class="pr-star-v4 pr-star-v4-100-filled"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
