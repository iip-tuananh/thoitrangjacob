@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
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
            <strong itemprop="name">{{$title_page}}</strong>
            <meta itemprop="position" content="2" />
         </li>
      </ul>
   </div>
</section>
<div class="blog-padding" itemscope itemtype="http://schema.org/Blog">
   <div class="container">
      <div class="list-news row">
         @foreach ($blogs as $blog)
            <div class="medium-4 small-12 news-item column">
               <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}" class="news-item-img">
               <img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="lazy img-responsive center-block" loading="lazy" />
               </a>
               <h2 style="padding-top: 10px;">
                  <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
               </h2>
               <div class="article-sum desc">
                  {{languageName($blog->description)}}
               </div>
            </div>
         @endforeach
      </div>
      <div class="text-xs-right text-center pagging-css margin-top-10">
         <nav class="text-center">
            {{$blogs->links()}}
         </nav>
      </div>
   </div>
</div>
@endsection