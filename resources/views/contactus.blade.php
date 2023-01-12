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
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" class="blog-wrapper blog-archive page-wrapper">
	   <header class="archive-page-header">
		  <div class="row row-full-width">
			 <div class="large-12 text-center col">
				<h1 class="page-title is-xl-large uppercase">
				   <span>Liên hệ</span>	
				</h1>
				<div class="breadcrumbs-category">
				   <div class="site-breadcrumbs clr"><a href="{{route('home')}}">Trang chủ</a><span class="separator"> / </span><span class="last">Liên hệ</span></div>
				</div>
			 </div>
		  </div>
	   </header>
	   <div class="container  align-center ">
		  <div class="c-contact col12-set justify-between flex">
			<div class="c-box-user col" data-animate-effect="fadeInUp">
				<h3><b>Thông tin cá nhân</b></h3>
				<form method="post" action="{{route('postcontact')}}" class="contact__form">
					@csrf
					<!-- Form message -->
					<div class="row">
						<div class="col-12">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Your message was sent successfully.
							</div>
						</div>
					</div>
					<!-- Form elements -->
					<div class="">
						<div class="col-md-12 form-group">
							<input name="name" type="text" placeholder="Họ tên*" required>
						</div>
						<div class="col-md-6 form-group">
							<input name="email" type="email" placeholder="Email *" required>
						</div>
						<div class="col-md-6 form-group">
							<input name="phone" type="text" placeholder="Số điện thoại" required>
						</div>
						<div class="col-md-12 form-group">
							<textarea name="mess" id="message" cols="30" rows="4" placeholder="Thông tin *" required></textarea>
						</div>
						<div class="col-md-12">
							<input name="submit" type="submit" value="Gửi tin">
						</div>
					</div>
				</form>
			</div>
			<div class="c-box-contact col" data-animate-effect="fadeInUp">
				<h3><b>Thông tin liên hệ</b></h3>
				<p>{{$setting->webname}}</p>
				<p><b>Phone :</b> {{$setting->phone1}}</p>
				<p><b>Email :</b> {{$setting->email}}</p>
				<p><b>Địa chỉ :</b> {{$setting->address1}}</p>
			</div>
		  </div>
	   </div>
	   <div class="container">
		{!!$setting->iframe_map!!}
	   </div>
	</div>
 </main>
@endsection