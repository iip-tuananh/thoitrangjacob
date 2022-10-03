
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
      <p>
         <span class="price-discount">{{number_format($discountPrice)}}₫</span>
         @if ($product->discount > 0)
         <span class="price-old">{{number_format($product->price)}}₫</span>
         @endif
      </p>
   </div>
</div>
