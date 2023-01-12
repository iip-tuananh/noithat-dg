<header id="header" class="header has-sticky sticky-shrink">
    <div class="header-wrapper">
        <div id="masthead" class="header-main">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="{{route('home')}}" title="{{$setting->company}}" rel="home">
                        <img
                            width="151"
                            height="75"
                            src="{{$setting->logo}}"
                            class="header_logo header-logo"
                            alt="{{$setting->company}}"
                        />
                        <img
                            width="151"
                            height="75"
                            src="{{$setting->logo}}"
                            class="header-logo-dark"
                            alt="{{$setting->company}}"
                        />
                    </a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="dark" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                                <i class="fa fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left nav-uppercase"></ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right nav-uppercase">
                        <li id="menu-item-11682" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11682 menu-item-design-default">
                            <a href="{{route('aboutUs')}}" class="nav-top-link">Giới thiệu</a>
                        </li>
                        @foreach ($categoryhome as $category)
                        <li id="menu-item-2912" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2912 menu-item-design-default has-dropdown">
                            <a href="#" class="nav-top-link">{{languageName($category->name)}}
                                @if (count($category->typeCate) > 0)
                                    <i class="icon-angle-down"></i>
                                @endif
                            </a>
                            @if (count($category->typeCate)>0)
                                <ul class="sub-menu nav-dropdown nav-dropdown-default">
                                    @foreach ($category->typeCate as $type)
                                        <li id="menu-item-3301" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3301">
                                            <a href="{{route('allListType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}">{{languageName($type->name)}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        @endforeach
                        <li id="menu-item-11682" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11682 menu-item-design-default">
                            <a href="{{route('duanTieuBieu')}}" class="nav-top-link">Dự án thi công</a>
                        </li>
                        <li id="menu-item-11682" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11682 menu-item-design-default">
                            <a href="{{route('allListBlog')}}" class="nav-top-link">Tin tức</a>
                        </li>
                        <li id="menu-item-2771" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2771 menu-item-design-default">
                            <a href="{{route('lienHe')}}" class="nav-top-link">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right">
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="#" aria-label="Search" class="is-small">
                                <i class="fa fa fa-magnifying-glass"></i>
                            </a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative is-normal">
                                            <form method="get" class="searchform" action="" role="search">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm" />
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                            <i class="fa fa fa-magnifying-glass"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide mobile-sidebar-slide mobile-sidebar-levels-1 mobile-sidebar-levels-2" data-levels="2">
    <div class="sidebar-menu no-scrollbar">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase nav-slide">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11682"><a href="{{route('aboutUs')}}">Giới thiệu</a></li>
            @foreach ($categoryhome as $category)
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2912">
                <a class="justify-between" href="#">{{languageName($category->name)}}
                    @if (count($category->typeCate) > 0)
                        <span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    @endif
                </a>
                @if (count($category->typeCate)>0)
                    <ul class="sub-menu nav-sidebar-ul children">
                        @foreach ($category->typeCate as $type)
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3301">
                                <a href="{{route('allListType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}">{{languageName($type->name)}}</a>
                            </li>
                        @endforeach
                        
                    </ul>
                @endif
                
            </li> 
            @endforeach
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-11455"><a href="{{route('allProduct')}}">Dự án thi công</a></li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2771"><a href="{{route('allListBlog')}}">Tin tức</a></li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2771"><a href="{{route('lienHe')}}">Liên hệ</a></li>
        </ul>
    </div>
</div>