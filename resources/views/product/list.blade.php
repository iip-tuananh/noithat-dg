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
@endsection
@section('content')
<main id="main" class="">
   <div id="content" class="blog-wrapper blog-archive page-wrapper">
      <header class="archive-page-header">
         <div class="row row-full-width">
            <div class="large-12 text-center col">
               <h1 class="page-title is-xl-large uppercase">
                  <span>
                     {{$title}}
                  </span>	
               </h1>
               <div class="breadcrumbs-category">
                  <div class="site-breadcrumbs clr"><a href="{{route('home')}}">Trang chủ</a><span class="separator"> / </span><span class="last">{{$title}}</span></div>
               </div>
               <div class="taxonomy-description text-left">
                  <p><strong>Dưới đây là các {{$title}} hiện đại sang trọng tại nhiều nơi trên cả nước của {{$setting->company}}:</strong></p>
               </div>
            </div>
         </div>
      </header>
      <div class="row align-center row-full-width ">
         <div class="large-12 col">
            <div class="row large-columns-3 medium-columns- small-columns-1 row-small row-full-width">
               @if (count($list) > 0)
               @foreach ($list as $item)
               <div class="col post-item">
                  @include('layouts.product.item',['pro'=>$item])
              </div>
               @endforeach
               @else
               <h3>Nội dung đang cập nhật...</h3>
               @endif
            </div>
            <div class="c-box-paginate">
               {{$list->links()}}
             </div>
             <style>
               .c-box-paginate nav{
                  display: flex;
                  justify-content: center;
               }
               .pagination{
                  display: flex;
                  list-style-type: none;
                  margin: 5px 0;
                  font-size: .85em;
                  text-align: center;
               }
               .pagination li{
                  margin: 0 0.4em;
                  display: inline-block;
                  width: 33px;
                  height: 33px;
                  background: #878786;
                  margin-left: unset !important
               }
               .pagination .active{
                  width: 33px;
                  height: 33px;
                  background: #000 !important;
               }
               .pagination .page-item .page-link{
                  color: #fff;
               }
             </style>
         </div>
      </div>
      <section class="section section-why" id="section_686493320">
         <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
         </div>
         <div class="section-content relative">
            <div id="gap-1513519797" class="gap-element clearfix" style="display:block; height:auto;">
               <style>
                  #gap-1513519797 {
                  padding-top: 30px;
                  }
               </style>
            </div>
            <div class="row align-equal align-equal" id="row-857185262">
               <div id="col-871666376" class="col medium-6 small-12 large-3">
                  <div class="col-inner">
                     <div class="icon-box featured-box icon-box-center text-center is-small">
                        <div class="icon-box-img" style="width: 60px">
                           <div class="icon">
                              <div class="icon-inner">
                                 <img width="300" height="233" src="{{asset('frontend/images/100-NAM-KINH-NGHIEM-300x233.png')}}" class="attachment-medium size-medium" alt="10 NAM KINH NGHIEM" loading="lazy"  sizes="(max-width: 300px) 100vw, 300px">					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">10 năm đa phong cách</h5>
                           <div id="text-86606557" class="text">
                              {{$setting->company}} khẳng định vị thế dẫn đầu trong trường phái này. Với &gt; 400 căn hộ được thiết kế &amp; thi công nội thất trọn gói mỗi năm, chúng tôi là 1 trong những đơn vị uy tín hàng đầu miền Bắc.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="col-1757706710" class="col medium-6 small-12 large-3">
                  <div class="col-inner">
                     <div class="icon-box featured-box icon-box-center text-center is-small">
                        <div class="icon-box-img" style="width: 60px">
                           <div class="icon">
                              <div class="icon-inner">
                                 <img width="300" height="209" src="{{asset('frontend/images/QUY-TRINH-CHAT-CHE-300x209.png')}}" class="attachment-medium size-medium" alt="QUY TRINH CHAT CHE" loading="lazy"
                                  
                                  sizes="(max-width: 300px) 100vw, 300px">					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">Quy Trình Chặt Chẽ</h5>
                           <div id="text-1757851938" class="text">
                              Sỡ hữu Nhà máy sản xuất rộng trên 2000m2 cùng hệ thống kiểm soát chất lượng chặt chẽ từ khâu sản xuất đến dịch vụ, bạn có thể hoàn toàn yên tâm khi sử dụng dịch vụ thiết kế - thi công trọn gói của chúng tôi.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="col-1895565983" class="col medium-6 small-12 large-3">
                  <div class="col-inner">
                     <div class="icon-box featured-box icon-box-center text-center is-small">
                        <div class="icon-box-img" style="width: 60px">
                           <div class="icon">
                              <div class="icon-inner">
                                 <img width="300" height="233" src="{{asset('frontend/images/icon-phong-thuy1-300x233.png')}}" class="attachment-medium size-medium" alt="icon phong thuy1" loading="lazy"
      
                                 sizes="(max-width: 300px) 100vw, 300px">					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">Đề Cao Phong Thủy</h5>
                           <div id="text-2285398989" class="text">
                              Phong thủy luôn là yếu tố được cân nhắc đầu tiên trong thiết kế nội thất hiện đại của {{$setting->images}}, nhằm việc tạo không gian sống phù hợp với tuổi, mệnh của gia chủ, giúp hạn chế điềm xấu, tài vận sinh sôi.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="col-646588035" class="col medium-6 small-12 large-3">
                  <div class="col-inner">
                     <div class="icon-box featured-box icon-box-center text-center is-small">
                        <div class="icon-box-img" style="width: 60px">
                           <div class="icon">
                              <div class="icon-inner">
                                 <img width="300" height="233" src="{{asset('frontend/images/CAM-KET-TIEN-DO-123-300x233.png')}}" class="attachment-medium size-medium" alt="CAM KET TIEN DO 123" loading="lazy" 
                                 
                                 sizes="(max-width: 300px) 100vw, 300px">					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">Cam Kết Tiến Độ</h5>
                           <div id="text-1092933387" class="text">
                              {{$setting->company}} là đơn vị duy nhất hiện nay cam kết nếu thời gian thi công căn hộ chậm tiến độ so với hợp đồng thi công thì sẽ chịu phạt tiến độ với mức phạt 1 triệu đồng/1 ngày.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <style>
            #section_686493320 {
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: rgb(239, 239, 239);
            }
         </style>
      </section>
   </div>
</main>
   
{{-- <section class="content-lines-wrapper">
   <div class="content-lines-inner">
       <div class="content-lines"></div>
   </div>
</section>
<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/images/screenshot_1667981575.png')}}" style="background-image: url(&quot;{{url('frontend/images/screenshot_1667981575.png')}}&quot;);"></section>
<section class="services section-padding2">
   <div class="container">
       <div class="row">
           <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
               <h2 class="section-title">{{$title}}</h2>
           </div>
       </div>
       <div class="row">
         @if (count($list) > 0)
         @foreach ($list as $item)
         <div class="col-md-6">
            @include('layouts.product.item',['pro'=>$item])
        </div>
         @endforeach
         @else
         <h3>Nội dung đang cập nhật...</h3>
         @endif
       </div>
   </div>
</section> --}}
@endsection

