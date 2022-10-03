@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('content')
<section class="bread-crumb">
	<div class="container row">
	<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
		<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item" href="{{route('home')}}" title="Trang chủ" style="margin-right: 6px;">
				<span itemprop="name">Trang chủ</span>
				<meta itemprop="position" content="1" />
			</a>
			<i class="fa-solid fa-caret-right"></i>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" style="margin-left: 6px;">
			<strong>
				<span itemprop="name">Đã tìm thấy {{$countproduct}} kết quả phù hợp</span>
				<meta itemprop="position" content="2" />
			</strong>
		</li>
	</ul>
	</div>
</section>
<div class="container ant-cate-content">
	<div class="row">
	<div class="medium-2 left-nav">
		<div class="list-brand">
			<p><strong>Thương hiệu</strong></p>
			<div class="brand">
				@foreach ($brands as $brand)
				<div class="medium-4">
					<div class="box-image-brand">
						<img src="{{$brand->image}}" alt="{{$brand->name}}" loading="lazy">
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="list-price">
			<p><strong>Giá</strong></p>
			<div class="form-group">
				<input type="radio" name="price" id="1" value=""><label for="1">10000</label>
			</div>
			<div class="form-group">
				<input type="radio" name="price" id="2" value=""><label for="2">10000</label>
			</div>
			<div class="form-group">
				<input type="radio" name="price" id="3" value=""><label for="3">10000</label>
			</div>
			<div class="form-group">
				<input type="radio" name="price" id="4" value=""><label for="4">10000</label>
			</div>
		</div>
		<button class="btn-filter">Lọc</button>
	</div>
	<div class="medium-10">
		<div class="list-product">
			@foreach ($resultPro as $product)
			<div class="medium-3">
				<div class="item">
				@include('layouts.product.item', ['product'=>$product])
				</div>
			</div>
			@endforeach
		</div>
	</div>
	</div>
</div>
@endsection