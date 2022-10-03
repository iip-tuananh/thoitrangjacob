@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
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
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item" href="{{route('allListBlog')}}" title="Tin tức" style="margin-right: 6px; margin-left: 6px;">
				<span itemprop="name">Tin tức</span>
				<meta itemprop="position" content="2" />
			</a>
			<i class="fa-solid fa-caret-right"></i>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" style="margin-left: 6px;">
			<strong itemprop="name">{{languageName($blog_detail->title)}}</strong>
			<meta itemprop="position" content="3" />
		</li>
	</ul>
	</div>
</section>
<div class="container article-wraper">
	<article class="article-main" itemscope itemtype="http://schema.org/Article">
	<div class="row">
		<div class="col-md-8 col-lg-8 col-xl-9 order-lg-2">
			<div class="nd-article margin-bottom-10">
				{{-- <h1 class="title-head">{{languageName($blog_detail->title)}}</h1> --}}
				<div class="article-details nd-toc-content article__content column">
					{!!languageName($blog_detail->content)!!}
				</div>
			</div>
		</div>
	</div>
	</article>
</div>
@endsection