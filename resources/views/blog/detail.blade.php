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
<main id="main" class="">
	<div id="content" class="blog-wrapper blog-single page-wrapper">
	   <div class="row align-center ">
		  <div class="large-12 col">
			 <article id="post-9966" class="post-9966 post type-post status-publish format-standard has-post-thumbnail hentry category-xu-huong-noi-that">
				<div class="article-inner ">
				   <header class="entry-header">
					  <div class="entry-header-text entry-header-text-top text-left">
						 <h1 class="entry-title text-center">{{languageName($blog_detail->title)}}</h1>
						 <div class="breadcrumbs-post text-center">
							<div class="site-breadcrumbs clr"><a href="{{route('home')}}">Trang chủ</a><span class="separator"> / </span><a href="{{route('allListBlog')}}">Tin tức</a><span class="separator"> / </span><span class="last">{{languageName($blog_detail->title)}}</span></div>
						 </div>
					  </div>
				   </header>
				   <div class="entry-content single-page">
					{!!languageName($blog_detail->content)!!}
				   </div>
				</div>
			 </article>
			 <div id="comments" class="comments-area">
			 </div>
		  </div>
	   </div>
	</div>
	
 </main>
@endsection