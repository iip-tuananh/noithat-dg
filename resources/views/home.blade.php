@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')

<main id="main" class="">
<div id="content" role="main" class="content-area">
    <div class="slider-wrapper relative" id="slider-71542575">
        <div
            class="slider slider-nav-simple slider-nav-large slider-nav-light slider-style-container slider-show-nav"
            data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": true,
            "wrapAround": true,
            "autoPlay": 6000,
            "pauseAutoPlayOnHover" : false,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'
        >
        @foreach ($banner as $banner)
            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1656164587">
                <div class="img-inner dark">
                    <img
                        width="1400"
                        height="700"
                        src="{{$banner->image}}"
                        class="attachment-original size-original"
                        alt="{{$banner->title}}"
                        loading="lazy"
                        srcset="
                        {{$banner->image}}  1400w,
                        {{$banner->image}}  300w,
                        {{$banner->image}} 1024w,
                        {{$banner->image}}   768w
                        "
                        sizes="(max-width: 1400px) 100vw, 1400px"
                    />
                </div>

                <style>
                    #image_1656164587 {
                        width: 100%;
                    }
                </style>
            </div>
        @endforeach
        </div>

        <div class="loading-spin dark large centered"></div>
    </div>
    <section class="section" id="section_1213387450">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded"></div>

            <div class="section-content relative">
            <div class="container section-title-container" style="margin-top: 50px;">
                <h2 class="section-title section-title-center"><b></b><span class="section-title-main">TẠI SAO CHỌN CHÚNG TÔI ?</span><b></b></h2>
            </div>

            <div class="row" id="row-1066924973">
                <div id="col-1940941897" class="col small-12 large-12">
                        <div class="col-inner">
                        <p>
                            {!!$gioithieu->description !!}
                        </p>
                        </div>
                </div>
            </div>
            </div>
        
            <style>
            #section_1213387450 {
                padding-top: 0px;
                padding-bottom: 0px;
            }
            </style>
    </section>
    <section class="section section-why" id="section_2113715791">
        <div class="bg section-bg fill bg-fill bg-loaded bg-loaded"></div>

        <div class="section-content relative container">
            <div id="gap-1722801359" class="gap-element clearfix" style="display: block; height: auto;">
                <style>
                    #gap-1722801359 {
                        padding-top: 30px;
                    }
                </style>
            </div>

            <div class="row align-equal align-equal" id="row-1564142714">
                <div id="col-577789829" class="col medium-6 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-center text-center is-small">
                            <div class="icon-box-img" style="width: 60px;">
                                <div class="icon">
                                    <div class="icon-inner">
                                        <img width="300" height="233" src="{{asset('frontend/images/100-NAM-KINH-NGHIEM-300x233.png')}}" class="attachment-medium size-medium" alt="10 NAM KINH NGHIEM" loading="lazy" sizes="(max-width: 300px) 100vw, 300px">
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h5 class="uppercase">10 năm đa phong cách</h5>

                                <div id="text-1648210717" class="text">
                                    {{$setting->company}} khẳng định vị thế dẫn đầu trong trường phái này. Với &gt; 400 căn hộ được thiết kế &amp; thi công nội thất trọn gói mỗi năm, chúng tôi là 1
                                    trong những đơn vị uy tín hàng đầu miền Bắc.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="col-514604906" class="col medium-6 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-center text-center is-small">
                            <div class="icon-box-img" style="width: 60px;">
                                <div class="icon">
                                    <div class="icon-inner">
                                        <img width="300" height="209" src="{{asset('frontend/images/QUY-TRINH-CHAT-CHE-300x209.png')}}" class="attachment-medium size-medium" alt="QUY TRINH CHAT CHE" loading="lazy" srcset="
                                            
                                            " sizes="(max-width: 300px) 100vw, 300px">
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h5 class="uppercase">Quy Trình Chặt Chẽ</h5>

                                <div id="text-3623436482" class="text">
                                    Sỡ hữu Nhà máy sản xuất rộng trên 2000m2 cùng hệ thống kiểm soát chất lượng chặt chẽ từ khâu sản xuất đến dịch vụ, bạn có thể hoàn toàn yên tâm khi sử dụng dịch vụ thiết kế - thi công trọn
                                    gói của chúng tôi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="col-1308120240" class="col medium-6 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-center text-center is-small">
                            <div class="icon-box-img" style="width: 60px;">
                                <div class="icon">
                                    <div class="icon-inner">
                                        <img width="300" height="233" src="{{asset('frontend/images/icon-phong-thuy1-300x233.png')}}" class="attachment-medium size-medium" alt="icon phong thuy1" loading="lazy" srcset="
                                                
                                            " sizes="(max-width: 300px) 100vw, 300px">
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h5 class="uppercase">Đề Cao Phong Thủy</h5>

                                <div id="text-3339838632" class="text">
                                    Phong thủy luôn là yếu tố được cân nhắc đầu tiên trong thiết kế nội thất hiện đại của {{$setting->company}}, nhằm việc tạo không gian sống phù hợp với tuổi, mệnh của gia chủ, giúp hạn chế điềm xấu, tài
                                    vận sinh sôi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="col-2121367182" class="col medium-6 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-center text-center is-small">
                            <div class="icon-box-img" style="width: 60px;">
                                <div class="icon">
                                    <div class="icon-inner">
                                        <img width="300" height="233" src="{{asset('frontend/images/CAM-KET-TIEN-DO-123-300x233.png')}}" class="attachment-medium size-medium" alt="CAM KET TIEN DO 123" loading="lazy" srcset="
                                            " sizes="(max-width: 300px) 100vw, 300px">
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h5 class="uppercase">Cam Kết Tiến Độ</h5>

                                <div id="text-1058023492" class="text">
                                    {{$setting->company}} là đơn vị duy nhất hiện nay cam kết nếu thời gian thi công căn hộ chậm tiến độ so với hợp đồng thi công thì sẽ chịu phạt tiến độ với mức phạt 1 triệu đồng/1 ngày.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #section_2113715791 {
                padding-top: 15px;
                padding-bottom: 15px;
                background-color: rgb(239, 239, 239);
            }
        </style>
    </section>
    <div class="container section-title-container h6">
        <h2 class="section-title section-title-center"><b></b>
            @foreach ($categoryhome as $key => $category)
                @if ($key == 0 )
                <span class="section-title-main">
                {!!languageName($categoryhome[0]->name)!!} phong cách hiện đại
                </span><b></b>
                @endif
            @endforeach
        </h2>
    </div>
    <section class="section home-project" id="section_876099558">
        <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" ></div>
        <div class="section-content relative">
            <div class="row row-full-width" id="row-807006190">
                <div id="col-76180814" class="col small-12 large-12">
                    <div class="col-inner">
                        <div class="tabbed-content">
                            <ul class="nav nav-outline nav-uppercase nav-size-normal nav-center">
                                @foreach ($categoryhome as $key => $category)
                                    @if ($key == 0 )
                                    @foreach ($category->typeCate as $type)
                                        <li class="tab has-icon ">
                                            <a href="javascript:;" onclick="getAjax('{{$type->id}}', '{{route('getdataAjax')}}')"><span>{{languageName($type->name)}}</span></a>
                                        </li>
                                    @endforeach
                                    <span class="section-title-main">
                                    </span><b></b>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="tab-panels">
                                <div class="panel active entry-content " id="content-ajax">
                                    <div class="row large-columns-3 medium-columns-3 small-columns-1 row-full-width">
                                        @foreach ($homePro as $produde)
                                        <div class="col post-item">
                                            <div class="col-inner">
                                                <a href="{{route('detailProduct',['cate'=>$produde->cate_slug,'type'=>$produde->type_slug ? $produde->type_slug : 'loai','id'=>$produde->slug])}}" class="plain">
                                                <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            @php
                                                                $img = json_decode($produde->images)
                                                            @endphp
                                                            <div class="image-overlay-add image-zoom image-cover" style="padding-top: 50%;">
                                                            <img
                                                                    width="2560"
                                                                    height="1706"
                                                                    src="{{$img[0]}}"
                                                                    class="attachment-original size-original wp-post-image"
                                                                    alt="{!!languageName($produde->name)!!}"
                                                                    loading="lazy"
                                                                    srcset="
                                                                    {{$img[0]}}    2560w,
                                                                    {{$img[0]}}    300w,
                                                                    {{$img[0]}}  1024w,
                                                                    {{$img[0]}}   768w,
                                                                    {{$img[0]}} 1536w,
                                                                    {{$img[0]}} 2048w
                                                                    "
                                                                    sizes="(max-width: 2560px) 100vw, 2560px"
                                                            />
                                                            <div class="overlay" style="background-color: rgba(63, 63, 63, 0.395);"></div>
                                                            </div>
                                                        </div>
                                                        <div class="box-text text-left">
                                                            <div class="box-text-inner blog-post-inner">
                                                            <h5 class="post-title is-large">{!!languageName($produde->name)!!}</h5>
                                                            <div class="is-divider"></div>
                                                            </div>
                                                        </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #section_876099558 {
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: rgb(239, 239, 239);
            }
        </style>
    </section>

    <div class="container section-title-container h6" style="margin-top: 50px; margin-bottom: 30px;">
        <h2 class="section-title section-title-center"><b></b><span class="section-title-main">DỰ ÁN THI CÔNG MỚI NHẤT</span><b></b></h2>
    </div>
    <section class="section home-project" id="section_1805070505">
        <div class="bg section-bg fill bg-fill bg-loaded bg-loaded"></div>

        <div class="section-content relative">
            <div id="gap-1838488191" class="gap-element clearfix" style="display: block; height: auto;">
                <style>
                    #gap-1838488191 {
                        padding-top: 30px;
                    }
                </style>
            </div>

            <div class="row row-full-width" id="row-2097481692">
                <div id="col-279849915" class="col small-12 large-12">
                    <div class="col-inner text-center">
                        <div class="row large-columns-3 medium-columns-3 small-columns-1 row-full-width">
                            @foreach ($duan as $duanS)
                            <div class="col post-item">
                            <div class="col-inner">
                                <a href="{{route('duanTieuBieuDetail',['slug'=>$duanS->slug])}}" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            @php
                                                $img = json_decode($duanS->images)
                                            @endphp
                                            <div class="image-overlay-add image-zoom image-cover" style="padding-top: 50%;">
                                                <img
                                                    width="2560"
                                                    height="1706"
                                                    src="{{$img[0]}}"
                                                    class="attachment-original size-original wp-post-image"
                                                    alt="{{$duanS->name}}"
                                                    loading="lazy"
                                                    srcset="
                                                    {{$img[0]}}    2560w,
                                                    {{$img[0]}}    300w,
                                                    {{$img[0]}}  1024w,
                                                    {{$img[0]}}   768w,
                                                    {{$img[0]}} 1536w,
                                                    {{$img[0]}} 2048w
                                                    "
                                                    sizes="(max-width: 2560px) 100vw, 2560px"
                                                />
                                                <div class="overlay" style="background-color: rgba(63, 63, 63, 0.395);"></div>
                                            </div>
                                        </div>
                                        <div class="box-text text-left">
                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large">{{$duanS->name}}</h5>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            </div>
                        @endforeach
                        </div>
                        <a href="{{route('duanTieuBieu')}}" target="_self" class="button secondary is-outline lowercase" style="border-radius: 4px;">
                            <span>Xem thêm: Dự án</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #section_1805070505 {
                padding-top: 0px;
                padding-bottom: 0px;
                background-color: rgb(239, 239, 239);
            }
        </style>
    </section>
    <section class="section" id="section_1308339113">
        <div class="bg section-bg fill bg-fill bg-loaded bg-loaded"></div>

        <div class="section-content relative">
            <div class="row" id="row-725832477">
                <div id="col-905786800" class="col small-12 large-12">
                    <div class="col-inner">
                        <div id="text-3993187431" class="text">
                            <h2>VỀ CHÚNG TÔI</h2>
                        </div>
                    </div>
                </div>
                    <div id="col-621745603" class="col medium-6 small-12 large-6">
                    <div class="col-inner">
                        <div class="row large-columns-1 medium-columns-1 small-columns-1">
                            <div class="col post-item">
                                <div class="col-inner">
                                    <a href="{}" class="plain">
                                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                            <div class="box-image">
                                                <div class="image-cover" style="padding-top: 56.25%;">
                                                    <img
                                                        width="300"
                                                        height="225"
                                                        src="{{$gioithieu->image}}"
                                                        class="attachment-medium size-medium wp-post-image"
                                                        alt="{{$setting->company}}"
                                                        loading="lazy"
                                                        srcset="
                                                        {{$gioithieu->image}}   300w,
                                                        {{$gioithieu->image}} 1024w,
                                                        {{$gioithieu->image}}   768w,
                                                        {{$gioithieu->image}}          1200w
                                                        "
                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="col-1926873338" class="col medium-6 small-12 large-6">
                    <div class="col-inner">
                        <div class="row large-columns-1 medium-columns-1 small-columns-1 row-small has-shadow row-box-shadow-1">
                            <div>

                            </div>
                            <div class="col post-item text-center">
                                <div class="col-inner">
                                    <p>
                                        {!!$gioithieu->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container flex justify-center">
                    <a href="{{route('aboutUs')}}" target="_self" class="button secondary is-outline lowercase" style="border-radius: 4px;">
                        <span>Xem thêm</span>
                    </a>
                </div>
            </div>
        </div>

        <style>
            #section_1308339113 {
                padding-top: 30px;
                padding-bottom: 30px;
            }
            #col-1926873338 .col-inner p{
                padding-top: 5px;
                padding-left: 10px;
                padding-right: 10px;
                padding-bottom: 0px;
            }
        </style>
    </section>
    <section class="section home-team" id="section_1074951157">
        <div class="bg section-bg fill bg-fill bg-loaded bg-loaded"></div>

        <div class="section-content relative">
            <div class="container section-title-container">
                <h2 class="section-title section-title-center"><b></b><span class="section-title-main">ĐỘI NGŨ KIẾN TRÚC SƯ</span><b></b></h2>
            </div>
            <div class="row" id="row-1432341705">
                <div id="col-142776912" class="col small-12 large-12">
                    <div class="col-inner text-center">
                        <div class="slider-wrapper relative" id="slider-938114043">
                            <div
                                class="slider slider-nav-simple slider-nav-normal slider-nav-dark slider-nav-outside slider-style-container"
                                data-flickity-options='{
                                    "cellAlign": "center",
                                    "imagesLoaded": true,
                                    "lazyLoad": 1,
                                    "freeScroll": false,
                                    "wrapAround": false,
                                    "autoPlay": 2000,
                                    "pauseAutoPlayOnHover" : true,
                                    "prevNextButtons": true,
                                    "contain" : true,
                                    "adaptiveHeight" : true,
                                    "dragThreshold" : 10,
                                    "percentPosition": true,
                                    "pageDots": true,
                                    "rightToLeft": false,
                                    "draggable": true,
                                    "selectedAttraction": 0.1,
                                    "parallax" : 0,
                                    "friction": 0.6        }'
                            >    
                                @foreach ($reviewcus as $review)
                                    <div class="row align-center" id="row-791703460">
                                    <div id="col-1634964678" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div class="box has-hover team-item has-hover box-shadow-1 box-shadow-3-hover box-vertical box-text-top">
                                                <div class="box-image" style="width: 25%;">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <div class="image-cover" style="padding-top: 300px;">
                                                            <img
                                                                width="1920"
                                                                height="2560"
                                                                src="{{$review->avatar}}"
                                                                class="attachment- size-"
                                                                alt="{{languageName($review->name)}}"
                                                                loading="lazy"
                                                                srcset="
                                                                {{$review->avatar}}           1920w,
                                                                {{$review->avatar}}    225w,
                                                                {{$review->avatar}}   768w,
                                                                {{$review->avatar}} 1152w,
                                                                {{$review->avatar}} 1536w
                                                                "
                                                                sizes="(max-width: 1920px) 100vw, 1920px"
                                                            />
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-text text-left is-xsmall" style="padding: 5px 10px 5px 10px;">
                                                    <div class="box-text-inner">
                                                        <div id="text-960994934" class="text">
                                                            <h2 class="name"><strong>{{languageName($review->name)}}</strong></h2>
                                                        </div>
                                                        @if ($review->position !== null)
                                                            <h4 class="job"><strong>Kiến trúc sư</strong></h4>
                                                            <p>
                                                                {!!languageName($review->position)!!}
                                                            </p>
                                                        @endif
                                                        
                                                        <h4 class="slogan"><strong>Triết lý</strong></h4>
                                                        <p>
                                                            {!!languageName($review->content)!!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="loading-spin dark large centered"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #section_1074951157 {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        </style>
    </section>

    <section class="section" id="section_930425300">
        <div class="bg section-bg fill bg-fill bg-loaded" style="background-image: url({{asset('frontend/images/home-customer-bg.jpg')}})"></div>

        <div class="section-content relative">
            <div class="row align-center" id="row-1085542161">
                <div id="col-713341180" class="col medium-6 small-12 large-6">
                    <div class="col-inner">
                        <div id="text-3317145286" class="text">
                            <h5 style="text-align: center;">NHẬN TƯ VẤN MIỄN PHÍ</h5>
                            <p style="text-align: center;">Thiết kế nội thất mới nhất</p>
                        </div>
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
                                    <div class="col-md-12">
                                        <input class="c-contact-btn" class="wpcf7-form-control has-spinner wpcf7-submit ac-button__secondary" name="submit" type="submit" value="Gửi tin">
                                    </div>
                                </div>
                            </form>
                    </div>
                    <style>
                        #col-713341180 > .col-inner {
                            margin: 30px 0px 0px 0px;
                        }
                        .c-contact-btn{
                            width: 100%;
                            background-color: white !important;
                            color: black !important;
                        }
                    </style>
                </div>
            </div>
        </div>

        <style>
            #section_930425300 {
                padding-top: 0px;
                padding-bottom: 0px;
            }

            #section_930425300 .section-bg.bg-loaded {
                /* background-image: url(https://byzan.vn/wp-content/uploads/2022/09/home-customer-bg.jpg); */
            }
        </style>
    </section>

    
</div>
</main>
@endsection