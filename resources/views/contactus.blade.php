@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/contacts.scss.css')}}" />
<link href="{{asset('frontend/css/contacts.scss.css')}}" rel="stylesheet" type="text/css" />
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/bread-crumb.scss.css')}}" onload="this.rel='stylesheet'" />
<link href="{{asset('frontend/css/bread-crumb.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
	<div class="container">
	<div class="nd-main-title-breadcrumb text-center">Liên hệ</div>
	<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
		<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item" href="{{route('home')}}" title="Trang chủ">
				<span itemprop="name">Trang chủ</span>
				<meta itemprop="position" content="1" />
			</a>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<strong itemprop="name">Liên hệ</strong>
			<meta itemprop="position" content="2" />
		</li>
	</ul>
	</div>
</section>
<h1 class="d-none">Liên hệ</h1>
<div class="container contact page-contacts">
	<div class="row contact-padding">
	<div class="col-12 order-md-1 order-3">
		<div class="contact-maps">
			{!!$setting->iframe_map!!}
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 leave-your-message order-md-2 order-1">
		<h3>Thông tin liên hệ</h3>
		<p class="p-bottom">{{$setting->webname}}</p>
		<div class="contact-box">
			<p class="add"><strong>Địa chỉ 1: </strong>{{$setting->address1}} </p>
			@if (isset($setting->address2))
			<p class="add"><strong>Địa chỉ 2: </strong>{{$setting->address2}}</p>
			@endif
			<p class="phone"><strong>Điện thoại: </strong><a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a></p>
			<p class="mail"><strong>Email: </strong><a href="mailto:{{$setting->email}}" title="{{$setting->email}}">{{$setting->email}}</a></p>
		</div>
	</div>
	<div class="col-lg-8 col-md-6 col-sm-12 leave-your-message order-md-3 order-2">
		<form action="{{route('postcontact')}}" id="contact" method="post">
			@csrf
			<div class="row">
				<div class="col-sm-6 col-xs-12">
				<fieldset class="form-group">
					<label>Họ và tên<span class="required">*</span></label>
					<input placeholder="Nhập họ và tên" type="text" name="name" id="name" class="form-control  form-control-lg"/>
				</fieldset>
				</div>
				<div class="col-sm-6 col-xs-12">
				<fieldset class="form-group">
					<label>Email<span class="required">*</span></label>
					<input placeholder="Nhập địa chỉ Email" type="email" name="email" class="form-control  form-control-lg"/>
				</fieldset>
				</div>
				<div class="col-sm-12 col-xs-12">
				<fieldset class="form-group">
					<label>Điện thoại<span class="required">*</span></label>
					<input placeholder="Nhập số điện thoại" type="tel" name="phine" class="form-control  form-control-lg"/>
				</fieldset>
				</div>
				<div class="col-sm-12 col-xs-12">
				<fieldset class="form-group">
					<label>Nội dung<span class="required">*</span></label>
					<textarea placeholder="Nội dung liên hệ" name="mess" id="comment" class="form-control form-control-lg" rows="5"></textarea>
				</fieldset>
				<fieldset class="form-group">
					<button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
				</fieldset>
				</div>
			</div>
		</form>
	</div>
	</div>
</div>
@endsection