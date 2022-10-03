@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
<style>
.brand-list img{
    width: 100%;
    height: 140px;
}
.brand-list .brand-box{
    margin-bottom: 20px;
}
</style>
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
            <span itemprop="name">{{$title}}</span>
            <meta itemprop="position" content="2" />
            </strong>
        </li>
    </ul>
</div>
</section>
<div class="container brand-list">
<div class="row">
    @foreach ($brands as $brand)
        <div class="medium-2 small-6 column text-center brand-box">
            <a href="{{route('listProductBrand', ['slug'=>$brand->slug, 'cate'=>'all'])}}">
            <img src="{{$brand->image}}" alt="{{$brand->name}}" loading="lazy">
            <p>{{$brand->name}}</p>
            </a>
        </div>
    @endforeach
</div>
</div>
@endsection