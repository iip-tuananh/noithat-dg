@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
@section('content')
<main id="main" class="">
    <div id="content" class="blog-wrapper blog-single page-wrapper">
       <div class="row align-center ">
          <div class="large-12 col">
             <article id="post-10571" class="post-10571 post type-post status-publish format-standard has-post-thumbnail hentry category-thiet-ke-noi-that-biet-thu">
                <div class="article-inner ">
                   <header class="entry-header">
                      <div class="entry-header-text entry-header-text-top text-left">
                         <h1 class="entry-title text-center">{{languageName($product->name)}}</h1>
                         <div class="breadcrumbs-post text-center">
                            <div class="site-breadcrumbs clr"><a href="route('home')">Trang chủ</a><span class="separator"> / </span><a href="">{{languageName($product->typeCate->name)}}</a><span class="separator"> / </span><span class="last">{{languageName($product->name)}}</span></div>
                         </div>
                      </div>
                   </header>
                   <div class="entry-content single-page">
                      <p>{!!languageName($product->description)!!}</p>
                      <p>Cùng trải nghiệm không gian {{languageName($product->name)}}  được thực hiện bởi kiến trúc sư của {{$setting->company}} nhé</p>
                      <div class="entry-content">
                        <div class="col2-set">
                            <div class="col">
                               <a data-src="{{$img[0]}}" data-fancybox="gallery">
                                <img class="big-image" src="{{$img[0]}}" alt="{{languageName($product->name)}}" loading="lazy">
                               </a>
                            </div>
                            <div class="">
                                <div class="c-box-small col">
                               <div class="c-item-image ">
                                @foreach ($img as $key=>$item)
                                    @if ($key !=0 && $key < 2 )
                                    <div class="show-image">
                                        <a data-src="{{$item}}" data-fancybox="gallery">
                                        <img class="small-image" src="{{$item}}" alt="{{languageName($product->name)}}" loading="lazy">
                                        </a>
                                    </div>
                                    @endif
                                    @if ($key == 2)
                                    <div class="show-image row-slider">
                                        <a data-src="{{$item}}" data-fancybox="gallery">
                                           <img class="small-image" src="{{$item}}" alt="{{languageName($product->name)}}" loading="lazy">
                                           <p class="view">XEM THÊM +{{count($img)-3}} ẢNH</p>
                                        </a>
                                     </div> 
                                    @endif
                                    @if ($key > 2)
                                    <div class="" hidden>
                                        <a data-src="{{$item}}" data-fancybox="gallery">
                                        <img class="small-image" src="{{$item}}" alt="{{languageName($product->name)}}" loading="lazy">
                                        </a>
                                     </div>
                                    @endif
                                @endforeach
                               </div>
                            </div>
                            </div>
                            <style>
                                .big-image{
                                    width: 100%;
                                    height: 400px;
                                    margin-bottom: 20px;
                                    cursor: pointer;
                                }
                                .details-product .big-image{
                                    width: 100%;
                                    height: 400px;
                                    margin-bottom: 20px;
                                    cursor: pointer;
                                   
                                }
                                 .small-image{
                                    width: 100%;
                                    height: 190px;
                                    margin-bottom: 20px;
                                    cursor: pointer;
                                    margin-right: 20px;
                                }
                                .show-image:nth-child(2) .small-image{
                                position: relative;
                                }
                                .show-image:nth-child(2) .view{
                                 position: absolute;
                                 z-index: 99;
                                 bottom: 0;
                                 top: 0;
                                 text-align: center;
                                 padding-top: 90px;
                                 color: #fff;
                                 background-color: #000000a3;
                                 font-weight: 700;
                                 font-size: 14px;
                                 /* margin-left: 10px; */
                                 margin-right: 10px;
                                 cursor: pointer;
                                 height: 190px !important;
                                 width: 100%;
                                }
                                @media(max-width:991px){
                                 .c-item-image{
                                    display: flex !important;
                                    justify-content: space-between;
                                 }
                                 .show-image{
                                    width: 48%;
                                 }
                                }
                            </style>
                         </div>
                      </div>
                      <div class="container">
                        <p>{!!languageName($product->content)!!}</p>
                      </div>
                   </div>
                </div>
             </article>
          </div>
       </div>
    </div>
 </main>
@endsection

