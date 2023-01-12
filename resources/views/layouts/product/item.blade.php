
@php
$img = json_decode($pro->images);
@endphp
<div class="col-inner">
      <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}" class="plain">
         <div class="box box-normal box-text-bottom box-blog-post has-hover">
            <div class="box-image">
               <div class="image-overlay-add image-zoom image-cover" style="padding-top:50%;">
                  <img width="1500" height="844" src="{{$img[0]}}" class="attachment-original size-original wp-post-image" alt="{{languageName($pro->cate->name)}}" loading="lazy" 
                  srcset="{{$img[0]}} 1500w, 
                  {{$img[0]}} 300w, 
                  {{$img[0]}} 1024w, 
                  {{$img[0]}} 768w, 
                  {{$img[0]}} 1536w, 
                  {{$img[0]}} 450w, 
                  {{$img[0]}} 140w" sizes="(max-width: 1500px) 100vw, 1500px">  							
                  <div class="overlay" style="background-color: rgba(63, 63, 63, 0.395)"></div>
               </div>
            </div>
            <div class="box-text text-left">
               <div class="box-text-inner blog-post-inner">
                  <h5 class="post-title is-large ">{{languageName($pro->name)}}</h5>
                  <div class="is-divider"></div>
               </div>
            </div>
         </div>
      </a>
   </div>