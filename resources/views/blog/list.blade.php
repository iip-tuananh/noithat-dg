@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
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
                   <span>Tin tức</span>	
                </h1>
                <div class="breadcrumbs-category">
                   <div class="site-breadcrumbs clr"><a href="{{route('home')}}">Trang chủ</a><span class="separator"> / </span><span class="last">{{$title_page}}</span></div>
                </div>
             </div>
          </div>
       </header>
       <div class="row align-center row-full-width ">
          <div class="large-12 col">
             <div class="tabbed-content">
                <div class="tab-panels">
                   <div class="panel entry-content active" id="xu-huong-noi-that">
                      <div class="row large-columns-3 medium-columns- small-columns-1 row-full-width">
                        @foreach ($blog as $blg)
                            <div class="col post-item">  
                            <div class="col-inner">
                               <a href="{{route('detailBlog',[$blg->slug,])}}" class="plain">
                                  <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                     <div class="box-image">
                                        <div class="image-overlay-add image-zoom image-cover" style="padding-top:50%;">
                                           <img width="1024" height="683" src="{{$blg->image}}" class="attachment-original size-original wp-post-image" alt="{!!languageName($blg->title)!!}" loading="lazy"
                                            srcset="{{$blg->image}} 1024w,
                                            {{$blg->image}} 300w,
                                            {{$blg->image}} 768w"
                                               sizes="(max-width: 1024px) 100vw, 1024px">  							
                                           <div class="overlay" style="background-color: rgba(63, 63, 63, 0.395)"></div>
                                        </div>
                                     </div>
                                     <div class="box-text text-left">
                                        <div class="box-text-inner blog-post-inner">
                                           <h5 class="post-title is-large ">{!!languageName($blg->title)!!}</h5>
                                           <div class="is-divider"></div>
                                        </div>
                                     </div>
                                  </div>
                               </a>
                            </div>
                         </div>
                        @endforeach
                         <div class="c-box-paginate">
                           {{$blog->links()}}
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
                </div>
             </div>
          </div>
       </div>
       <section class="section" id="section_245891527">
          <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
          </div>
          <div class="section-content relative">
             <div class="container section-title-container" style="margin-top:50px;">
                <h2 class="section-title section-title-center"><b></b><span class="section-title-main">TẠI SAO CHỌN CHÚNG TÔI ?</span><b></b></h2>
             </div>
             <div class="row" id="row-1521076656">
                <div id="col-125493433" class="col small-12 large-12">
                   <div class="col-inner">
                      <p>{!!$gioithieu->description!!}</p>
                   </div>
                </div>
             </div>
          </div>
          <style>
             #section_245891527 {
             padding-top: 0px;
             padding-bottom: 0px;
             }
          </style>
       </section>
       <section class="section section-why" id="section_1925370815">
          <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
          </div>
          <div class="section-content relative">
             <div id="gap-1188879882" class="gap-element clearfix" style="display:block; height:auto;">
                <style>
                   #gap-1188879882 {
                   padding-top: 30px;
                   }
                </style>
             </div>
             <div class="row align-equal align-equal" id="row-1311946481">
                <div id="col-2107927597" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                      <div class="icon-box featured-box icon-box-center text-center is-small">
                         <div class="icon-box-img" style="width: 60px">
                            <div class="icon">
                               <div class="icon-inner">
                                  <img width="300" height="233" src="{{asset('frontend/images/100-NAM-KINH-NGHIEM-300x233.png')}}" class="attachment-medium size-medium" alt="10 NAM KINH NGHIEM" loading="lazy" 
                                  
                                   sizes="(max-width: 300px) 100vw, 300px">					
                               </div>
                            </div>
                         </div>
                         <div class="icon-box-text last-reset">
                            <h5 class="uppercase">10 năm đa phong cách</h5>
                            <div id="text-261106936" class="text">
                               {{$setting->company}} khẳng định vị thế dẫn đầu trong trường phái này. Với &gt; 400 căn hộ được thiết kế &amp; thi công nội thất trọn gói mỗi năm, chúng tôi là 1 trong những đơn vị uy tín hàng đầu miền Bắc.
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="col-282551753" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                      <div class="icon-box featured-box icon-box-center text-center is-small">
                         <div class="icon-box-img" style="width: 60px">
                            <div class="icon">
                               <div class="icon-inner">
                                  <img width="300" height="209" src="{{asset('frontend/images/QUY-TRINH-CHAT-CHE-300x209.png')}} " class="attachment-medium size-medium" alt="QUY TRINH CHAT CHE" loading="lazy" sizes="(max-width: 300px) 100vw, 300px">					
                               </div>
                            </div>
                         </div>
                         <div class="icon-box-text last-reset">
                            <h5 class="uppercase">Quy Trình Chặt Chẽ</h5>
                            <div id="text-3156452518" class="text">
                               Sỡ hữu Nhà máy sản xuất rộng trên 2000m2 cùng hệ thống kiểm soát chất lượng chặt chẽ từ khâu sản xuất đến dịch vụ, bạn có thể hoàn toàn yên tâm khi sử dụng dịch vụ thiết kế - thi công trọn gói của chúng tôi.
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="col-493744615" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                      <div class="icon-box featured-box icon-box-center text-center is-small">
                         <div class="icon-box-img" style="width: 60px">
                            <div class="icon">
                               <div class="icon-inner">
                                  <img width="300" height="233" src="{{asset('frontend/images/icon-phong-thuy1-300x233.png')}} " class="attachment-medium size-medium" alt="icon phong thuy1" loading="lazy"  sizes="(max-width: 300px) 100vw, 300px">					
                               </div>
                            </div>
                         </div>
                         <div class="icon-box-text last-reset">
                            <h5 class="uppercase">Đề Cao Phong Thủy</h5>
                            <div id="text-65529661" class="text">
                               Phong thủy luôn là yếu tố được cân nhắc đầu tiên trong thiết kế nội thất hiện đại của {{$setting->company}}, nhằm việc tạo không gian sống phù hợp với tuổi, mệnh của gia chủ, giúp hạn chế điềm xấu, tài vận sinh sôi.
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="col-1331623719" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                      <div class="icon-box featured-box icon-box-center text-center is-small">
                         <div class="icon-box-img" style="width: 60px">
                            <div class="icon">
                               <div class="icon-inner">
                                  <img width="300" height="233" src="{{asset('frontend/images/CAM-KET-TIEN-DO-123-300x233.png')}}CAM-KET-TIEN-DO-123-300x233.png" class="attachment-medium size-medium" alt="CAM KET TIEN DO 123" loading="lazy"  sizes="(max-width: 300px) 100vw, 300px">					
                               </div>
                            </div>
                         </div>
                         <div class="icon-box-text last-reset">
                            <h5 class="uppercase">Cam Kết Tiến Độ</h5>
                            <div id="text-1275336857" class="text">
                               {{$setting->company}} là đơn vị duy nhất hiện nay cam kết nếu thời gian thi công căn hộ chậm tiến độ so với hợp đồng thi công thì sẽ chịu phạt tiến độ với mức phạt 1 triệu đồng/1 ngày.
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <style>
             #section_1925370815 {
             padding-top: 15px;
             padding-bottom: 15px;
             background-color: rgb(239, 239, 239);
             }
          </style>
       </section>
    </div>
 </main>
@endsection