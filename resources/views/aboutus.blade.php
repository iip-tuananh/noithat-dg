@extends('layouts.main.master')
@section('title')
Về chúng tôi
@endsection
@section('description')
Về chúng tôi
@endsection
@section('css')
@section('image')
{{url(''.$setting->logo)}}
@endsection
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <div class="row about-section" id="row-385363253">
         <div id="col-146587930" class="col small-12 large-12">
            <div class="col-inner">
               <h1 style="text-align: center;">{{$setting->company}}</h1>
               <h3 style="text-align: center;"><strong>{!!$gioithieu->description !!}</strong></h3>
               <p><img class="aligncenter size-full wp-image-3235" src="{{$gioithieu->image}}" ></p>
               <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1518587934">
                  <div class="img-inner dark">
                  </div>
                  <style>
                     #image_1518587934 {
                     width: 100%;
                     }
                  </style>
               </div>
               <div>
                  {!!$gioithieu->content !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection