<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{url(''.$setting->favicon)}}"
        type="image/x-icon" />
    <link rel="apple-touch-icon"
        href="{{url(''.$setting->favicon)}}">
    <meta name="robots" content="noodp,index,follow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    <link rel="canonical" href="{{\Request::url()}}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{\Request::url()}}" />
    <meta property="og:site_name" content="JicaFood" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="548" />
    <meta property="og:image:height" content="343" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:image" content="@yield('image')" />
    <script data-no-optimize="1">
            var litespeed_docref = sessionStorage.getItem("litespeed_docref");
            litespeed_docref &&
            (Object.defineProperty(document, "referrer", {
                get: function () {
                        return litespeed_docref;
                },
            }),
            sessionStorage.removeItem("litespeed_docref"));
    </script>
    <meta charset="UTF-8" />
    <link data-optimized="2" rel="stylesheet" href="{{asset('frontend/css/mains.css')}}" />
    <script>
            (function (html) {
            html.className = html.className.replace(/\bno-js\b/, "js");
            })(document.documentElement);
    </script>
    <script type="application/ld+json" class="rank-math-schema">
            {
            "@context": "https://schema.org",
            "@graph": [
                {
                        "@type": "Place",
                        "@id": "https://byzan.vn/#place",
                        "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "S\u1ed1 12, BT3, Khu \u0111\u00f4 th\u1ecb Vinaconex 3, ph\u1ed1 C\u01b0\u01a1ng Ki\u00ean, ph\u01b0\u1eddng Trung V\u0103n",
                        "addressLocality": "Nam T\u1eeb Li\u00eam",
                        "addressRegion": "H\u00e0 N\u1ed9i",
                        "postalCode": "100000",
                        "addressCountry": "Vi\u1ec7t Nam"
                        }
                },
                {
                        "@type": "Organization",
                        "@id": "https://byzan.vn/#organization",
                        "name": "C\u00f4ng ty Thi\u1ebft k\u1ebf &amp; Thi c\u00f4ng N\u1ed9i th\u1ea5t Tr\u1ecdn G\u00f3i Byzan - Uy t\u00edn, Chuy\u00ean nghi\u1ec7p",
                        "url": "https://byzan.vn",
                        "email": "noithatbyzan@gmail.com",
                        "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "S\u1ed1 12, BT3, Khu \u0111\u00f4 th\u1ecb Vinaconex 3, ph\u1ed1 C\u01b0\u01a1ng Ki\u00ean, ph\u01b0\u1eddng Trung V\u0103n",
                        "addressLocality": "Nam T\u1eeb Li\u00eam",
                        "addressRegion": "H\u00e0 N\u1ed9i",
                        "postalCode": "100000",
                        "addressCountry": "Vi\u1ec7t Nam"
                        },
                        "logo": {
                        "@type": "ImageObject",
                        "@id": "https://byzan.vn/#logo",
                        "url": "https://byzan.vn/wp-content/uploads/2022/09/logo-byzan-youtube.png",
                        "contentUrl": "https://byzan.vn/wp-content/uploads/2022/09/logo-byzan-youtube.png",
                        "caption": "C\u00f4ng ty Thi\u1ebft k\u1ebf &amp; Thi c\u00f4ng N\u1ed9i th\u1ea5t Tr\u1ecdn G\u00f3i Byzan - Uy t\u00edn, Chuy\u00ean nghi\u1ec7p",
                        "inLanguage": "vi",
                        "width": "206",
                        "height": "205"
                        },
                        "contactPoint": [
                        { "@type": "ContactPoint", "telephone": "+84932262123", "contactType": "customer support" },
                        { "@type": "ContactPoint", "telephone": "+84932262123", "contactType": "sales" }
                        ],
                        "location": { "@id": "https://byzan.vn/#place" }
                },
                {
                        "@type": "WebSite",
                        "@id": "https://byzan.vn/#website",
                        "url": "https://byzan.vn",
                        "name": "C\u00f4ng ty Thi\u1ebft k\u1ebf &amp; Thi c\u00f4ng N\u1ed9i th\u1ea5t Tr\u1ecdn G\u00f3i Byzan - Uy t\u00edn, Chuy\u00ean nghi\u1ec7p",
                        "publisher": { "@id": "https://byzan.vn/#organization" },
                        "inLanguage": "vi",
                        "potentialAction": { "@type": "SearchAction", "target": "https://byzan.vn/?s={search_term_string}", "query-input": "required name=search_term_string" }
                },
                {
                        "@type": "WebPage",
                        "@id": "https://byzan.vn/#webpage",
                        "url": "https://byzan.vn/",
                        "name": "C\u00f4ng ty Thi\u1ebft k\u1ebf &amp; Thi c\u00f4ng N\u1ed9i th\u1ea5t Tr\u1ecdn G\u00f3i Byzan &#8211; Uy t\u00edn, Chuy\u00ean nghi\u1ec7p",
                        "datePublished": "2022-09-19T04:24:07+07:00",
                        "dateModified": "2022-12-27T17:39:05+07:00",
                        "about": { "@id": "https://byzan.vn/#organization" },
                        "isPartOf": { "@id": "https://byzan.vn/#website" },
                        "inLanguage": "vi"
                },
                {
                        "@type": "Person",
                        "@id": "https://byzan.vn/author/quantri/",
                        "name": "Administrator",
                        "url": "https://byzan.vn/author/quantri/",
                        "image": {
                        "@type": "ImageObject",
                        "@id": "https://secure.gravatar.com/avatar/e9755ed5f240529f5d8926930bbbd2ed?s=96&amp;d=mm&amp;r=g",
                        "url": "https://secure.gravatar.com/avatar/e9755ed5f240529f5d8926930bbbd2ed?s=96&amp;d=mm&amp;r=g",
                        "caption": "Administrator",
                        "inLanguage": "vi"
                        },
                        "worksFor": { "@id": "https://byzan.vn/#organization" }
                },
                {
                        "@type": "Article",
                        "headline": "C\u00f4ng ty Thi\u1ebft k\u1ebf &amp; Thi c\u00f4ng N\u1ed9i th\u1ea5t Tr\u1ecdn G\u00f3i Byzan &#8211; Uy t\u00edn, Chuy\u00ean nghi\u1ec7p",
                        "keywords": "n\u1ed9i th\u1ea5t byzan,byzan",
                        "datePublished": "2022-09-19T04:24:07+07:00",
                        "dateModified": "2022-12-27T17:39:05+07:00",
                        "author": { "@id": "https://byzan.vn/author/quantri/" },
                        "publisher": { "@id": "https://byzan.vn/#organization" },
                        "description": "Byzan l\u00e0 c\u00f4ng ty thi\u1ebft k\u1ebf v\u00e0 thi c\u00f4ng n\u1ed9i th\u1ea5t chuy\u00ean s\u00e2u s\u1ed1 m\u1ed9t phong c\u00e1ch hi\u1ec7n \u0111\u1ea1i. \u0110\u1eb3ng c\u1ea5p trong thi c\u00f4ng, Kh\u00e1c bi\u1ec7t trong thi\u1ebft k\u1ebf. S\u1eb5n s\u00e0ng ho\u00e0n l\u1ea1i 100% chi ph\u00ed khi kh\u00e1ch h\u00e0ng kh\u00f4ng h\u00e0i l\u00f2ng.",
                        "name": "C\u00f4ng ty Thi\u1ebft k\u1ebf &amp; Thi c\u00f4ng N\u1ed9i th\u1ea5t Tr\u1ecdn G\u00f3i Byzan &#8211; Uy t\u00edn, Chuy\u00ean nghi\u1ec7p",
                        "@id": "https://byzan.vn/#richSnippet",
                        "isPartOf": { "@id": "https://byzan.vn/#webpage" },
                        "inLanguage": "vi",
                        "mainEntityOfPage": { "@id": "https://byzan.vn/#webpage" }
                }
            ]
            }
    </script>
        <link rel="dns-prefetch" href="//s.w.org" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}" id="jquery-core-js"></script> --}}
        <script>
            function getAjax(e, url){
                var id = e;
                var url = url;
                $.ajax({
                    url: url,
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {id :id},
                    success: function(data) {
                        console.log(data);
                        $('#content-ajax').html(data.html);
                    },
                    error: function(data) {
                        console.log('loi');
                    }
                })
            }
        </script>
        <script data-optimized="1" type="text/javascript" src="{{asset('frontend/js/61db93291ae4e5afe60ec4c003cb9e6d.js')}}" id="easy-callnow-js"></script>
        <meta name="generator" content="WordPress 6.0.3" />
        <div class="fix_tel">
            <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 150px; bottom: -12px;">
            <div class="ring-alo-ph-circle"></div>
            <div class="ring-alo-ph-circle-fill"></div>
            <div class="ring-alo-ph-img-circle">

                <a href="tel:{{$setting->phone1}}">
                <img class="lazy" src="https://byzan.vn/wp-content/plugins/easy-call-now/public/images/phone-ring.png" alt="<php _e('Click to Call','call-now'); ?>">
                <noscript>&amp;lt;img src="https://byzan.vn/wp-content/plugins/easy-call-now/public/images/phone-ring.png" alt=""&amp;gt;</noscript>
                </a>
            </div>
            </div>
            <div class="tel">
                <p class="fone">{{$setting->phone1}}</p>
            </div>
        </div>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118984852-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "UA-118984852-1");
        </script>
        <!-- Facebook Pixel Code -->

        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "255092871790919");
            fbq("track", "PageView");
        </script>
        <noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=255092871790919&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
</head>
<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-11166 lightbox nav-dropdown-has-shadow mobile-submenu-slide mobile-submenu-slide-levels-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>

    <div id="wrapper">
        @include('layouts.header.index')
        @yield('content')
        @include('layouts.footer.index')
    </div>
    
    <script data-optimized="1" type="text/javascript" src="{{asset('frontend/js/92db292d90e64f7d5f3ba5bed1365e33.js')}}" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = { api: { root: "https:\/\/byzan.vn\/wp-json\/", namespace: "contact-form-7\/v1" }, cached: "1" };
        /* ]]> */
    </script>
    <script data-optimized="1" type="text/javascript" src="{{asset('frontend/js/4eb4a97f0b48030b3f321e2ed0ea7809.js')}}" id="contact-form-7-js"></script>
    <script data-optimized="1" type="text/javascript" src="{{asset('frontend/js/b66ad48ab497a02bee9d81c20ddc51b2.js')}}" id="regenerator-runtime-js"></script>
    <script data-optimized="1" type="text/javascript" src="{{asset('frontend/js/7a2ea60f57f7acaceff6d4b8db389a45.js')}}" id="wp-polyfill-js"></script>
    <script data-optimized="1" type="text/javascript" src="{{asset('frontend/js/405779c14c01722ce139d3a27a80512f.js')}}" id="hoverIntent-js"></script>
    <script type="text/javascript" id="flatsome-js-js-extra">
        /* <![CDATA[ */
        var flatsomeVars = {
            theme: { version: "3.14.3" },
            ajaxurl: "https:\/\/byzan.vn\/wp-admin\/admin-ajax.php",
            rtl: "",
            sticky_height: "75",
            assets_url: "https:\/\/byzan.vn\/wp-content\/themes\/flatsome\/assets\/js\/",
            lightbox: {
                close_markup:
                    '<button title="%title%" type="button" class="mfp-close"><svg xmlns="http:\/\/www.w3.org\/2000\/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"><\/line><line x1="6" y1="6" x2="18" y2="18"><\/line><\/svg><\/button>',
                close_btn_inside: false,
            },
            user: { can_edit_pages: false },
            i18n: { mainMenu: "Main Menu" },
            options: {
                cookie_notice_version: "1",
                swatches_layout: false,
                swatches_box_select_event: false,
                swatches_box_behavior_selected: false,
                swatches_box_update_urls: "1",
                swatches_box_reset: false,
                swatches_box_reset_extent: false,
                swatches_box_reset_time: 300,
                search_result_latency: "0",
            },
        };
    </script>
    <script src="https://kit.fontawesome.com/d3f77edfc2.js" crossorigin="anonymous"></script>
    <script data-optimized="1" type="text/javascript" src="{{asset('frontend/js/ddca6337c9a019eba6828999bbd86f55.js')}}" id="flatsome-js-js"></script>
    <div class="call-mobile"></div>

    <div class="quick-contact">
        <ul>
            <li><a href="" rel="nofollow" target="_blank"><img style="width: 75%"
                src="{{asset('frontend/images/zalo-logo-inkythuatso-14-15-05-01.jpg')}}" alt="" srcset="">
                Chat Zalo</a></li>
            <li class="phone-mobile">
                <a href="tel:{{$setting->phone1}}" rel="nofollow" class="button">
                    <span class="phone_animation animation-shadow">
                        <i style="color:white" class="fa-solid fa-phone"></i>
                    </span>
                    <span class="btn_phone_txt">Gọi điện</span>
                </a>
            </li>
            <li>
                <a href="https://www.messenger.com/t/Byzannoithathiendai" rel="nofollow" target="_blank"><img style="width: 36px" src="{{asset('frontend/images/logo-messenger-inkythuatso-2-01-30-15-48-06.jpg')}}" alt="" srcset="">
                    Messenger</a>
            </li>
            <li class="to-top-pc">  
                <a href="#" rel="nofollow">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA9ElEQVR4nO3UzQnCMBTA8afedADxoLWpAyiiY+gMjuVJb4IbeNI2enOMfFxER3gSqIi19YM2qcL7QyCUkP5IIAAURVFUwSFWglBOu3sxMfOyMVWfywXjCs0wc/OtPEwklzfMHaVWsMbaT2BYKSh8vKZ4nOOBbq8PU0/m4od63NuJgR+pk7uTwmzMbYk7FL7HuEPh5xj7KPweYw+VA1M8KgtzUKPvNgLw9qKfD1UgJj/KAiYXyudqnnyBA66GUFBmr+cXXc1TF3tb3bWJeYViXHYgWXOjG4xLbROTjpK6dZR1SMtIWSRmQSjaYDnm8F8URVF/3RVvYvtHOsIgPgAAAABJRU5ErkJggg==">
                </a>
            </li>
        </ul>
    </div>
    <script data-no-optimize="1" defer>
        !(function (t, e) {
            "object" == typeof exports && "undefined" != typeof module ? (module.exports = e()) : "function" == typeof define && define.amd ? define(e) : ((t = "undefined" != typeof globalThis ? globalThis : t || self).LazyLoad = e());
        })(this, function () {
            "use strict";
            function e() {
                return (e =
                    Object.assign ||
                    function (t) {
                        for (var e = 1; e < arguments.length; e++) {
                            var n,
                                a = arguments[e];
                            for (n in a) Object.prototype.hasOwnProperty.call(a, n) && (t[n] = a[n]);
                        }
                        return t;
                    }).apply(this, arguments);
            }
            function i(t) {
                return e({}, it, t);
            }
            function o(t, e) {
                var n,
                    a = "LazyLoad::Initialized",
                    i = new t(e);
                try {
                    n = new CustomEvent(a, { detail: { instance: i } });
                } catch (t) {
                    (n = document.createEvent("CustomEvent")).initCustomEvent(a, !1, !1, { instance: i });
                }
                window.dispatchEvent(n);
            }
            function l(t, e) {
                return t.getAttribute(gt + e);
            }
            function c(t) {
                return l(t, bt);
            }
            function s(t, e) {
                return (function (t, e, n) {
                    e = gt + e;
                    null !== n ? t.setAttribute(e, n) : t.removeAttribute(e);
                })(t, bt, e);
            }
            function r(t) {
                return s(t, null), 0;
            }
            function u(t) {
                return null === c(t);
            }
            function d(t) {
                return c(t) === vt;
            }
            function f(t, e, n, a) {
                t && (void 0 === a ? (void 0 === n ? t(e) : t(e, n)) : t(e, n, a));
            }
            function _(t, e) {
                nt ? t.classList.add(e) : (t.className += (t.className ? " " : "") + e);
            }
            function v(t, e) {
                nt
                    ? t.classList.remove(e)
                    : (t.className = t.className
                            .replace(new RegExp("(^|\\s+)" + e + "(\\s+|$)"), " ")
                            .replace(/^\s+/, "")
                            .replace(/\s+$/, ""));
            }
            function g(t) {
                return t.llTempImage;
            }
            function b(t, e) {
                !e || ((e = e._observer) && e.unobserve(t));
            }
            function p(t, e) {
                t && (t.loadingCount += e);
            }
            function h(t, e) {
                t && (t.toLoadCount = e);
            }
            function n(t) {
                for (var e, n = [], a = 0; (e = t.children[a]); a += 1) "SOURCE" === e.tagName && n.push(e);
                return n;
            }
            function m(t, e) {
                (t = t.parentNode) && "PICTURE" === t.tagName && n(t).forEach(e);
            }
            function a(t, e) {
                n(t).forEach(e);
            }
            function E(t) {
                return !!t[st];
            }
            function I(t) {
                return t[st];
            }
            function y(t) {
                return delete t[st];
            }
            function A(e, t) {
                var n;
                E(e) ||
                    ((n = {}),
                    t.forEach(function (t) {
                        n[t] = e.getAttribute(t);
                    }),
                    (e[st] = n));
            }
            function k(a, t) {
                var i;
                E(a) &&
                    ((i = I(a)),
                    t.forEach(function (t) {
                        var e, n;
                        (e = a), (t = i[(n = t)]) ? e.setAttribute(n, t) : e.removeAttribute(n);
                    }));
            }
            function L(t, e, n) {
                _(t, e.class_loading), s(t, ut), n && (p(n, 1), f(e.callback_loading, t, n));
            }
            function w(t, e, n) {
                n && t.setAttribute(e, n);
            }
            function x(t, e) {
                w(t, ct, l(t, e.data_sizes)), w(t, rt, l(t, e.data_srcset)), w(t, ot, l(t, e.data_src));
            }
            function O(t, e, n) {
                var a = l(t, e.data_bg_multi),
                    i = l(t, e.data_bg_multi_hidpi);
                (a = at && i ? i : a) && ((t.style.backgroundImage = a), (n = n), _((t = t), (e = e).class_applied), s(t, ft), n && (e.unobserve_completed && b(t, e), f(e.callback_applied, t, n)));
            }
            function N(t, e) {
                !e || 0 < e.loadingCount || 0 < e.toLoadCount || f(t.callback_finish, e);
            }
            function C(t, e, n) {
                t.addEventListener(e, n), (t.llEvLisnrs[e] = n);
            }
            function M(t) {
                return !!t.llEvLisnrs;
            }
            function z(t) {
                if (M(t)) {
                    var e,
                        n,
                        a = t.llEvLisnrs;
                    for (e in a) {
                        var i = a[e];
                        (n = e), (i = i), t.removeEventListener(n, i);
                    }
                    delete t.llEvLisnrs;
                }
            }
            function R(t, e, n) {
                var a;
                delete t.llTempImage, p(n, -1), (a = n) && --a.toLoadCount, v(t, e.class_loading), e.unobserve_completed && b(t, n);
            }
            function T(o, r, c) {
                var l = g(o) || o;
                M(l) ||
                    (function (t, e, n) {
                        M(t) || (t.llEvLisnrs = {});
                        var a = "VIDEO" === t.tagName ? "loadeddata" : "load";
                        C(t, a, e), C(t, "error", n);
                    })(
                        l,
                        function (t) {
                            var e, n, a, i;
                            (n = r), (a = c), (i = d((e = o))), R(e, n, a), _(e, n.class_loaded), s(e, dt), f(n.callback_loaded, e, a), i || N(n, a), z(l);
                        },
                        function (t) {
                            var e, n, a, i;
                            (n = r), (a = c), (i = d((e = o))), R(e, n, a), _(e, n.class_error), s(e, _t), f(n.callback_error, e, a), i || N(n, a), z(l);
                        }
                    );
            }
            function G(t, e, n) {
                var a, i, o, r, c;
                (t.llTempImage = document.createElement("IMG")),
                    T(t, e, n),
                    E((c = t)) || (c[st] = { backgroundImage: c.style.backgroundImage }),
                    (o = n),
                    (r = l((a = t), (i = e).data_bg)),
                    (c = l(a, i.data_bg_hidpi)),
                    (r = at && c ? c : r) && ((a.style.backgroundImage = 'url("'.concat(r, '")')), g(a).setAttribute(ot, r), L(a, i, o)),
                    O(t, e, n);
            }
            function D(t, e, n) {
                var a;
                T(t, e, n), (a = e), (e = n), (t = It[(n = t).tagName]) && (t(n, a), L(n, a, e));
            }
            function V(t, e, n) {
                var a;
                (a = t), (-1 < yt.indexOf(a.tagName) ? D : G)(t, e, n);
            }
            function F(t, e, n) {
                var a;
                t.setAttribute("loading", "lazy"), T(t, e, n), (a = e), (e = It[(n = t).tagName]) && e(n, a), s(t, vt);
            }
            function j(t) {
                t.removeAttribute(ot), t.removeAttribute(rt), t.removeAttribute(ct);
            }
            function P(t) {
                m(t, function (t) {
                    k(t, Et);
                }),
                    k(t, Et);
            }
            function S(t) {
                var e;
                (e = At[t.tagName]) ? e(t) : E((e = t)) && ((t = I(e)), (e.style.backgroundImage = t.backgroundImage));
            }
            function U(t, e) {
                var n;
                S(t), (n = e), u((e = t)) || d(e) || (v(e, n.class_entered), v(e, n.class_exited), v(e, n.class_applied), v(e, n.class_loading), v(e, n.class_loaded), v(e, n.class_error)), r(t), y(t);
            }
            function $(t, e, n, a) {
                var i;
                n.cancel_on_exit &&
                    (c(t) !== ut ||
                        ("IMG" === t.tagName &&
                            (z(t),
                            m((i = t), function (t) {
                                j(t);
                            }),
                            j(i),
                            P(t),
                            v(t, n.class_loading),
                            p(a, -1),
                            r(t),
                            f(n.callback_cancel, t, e, a))));
            }
            function q(t, e, n, a) {
                var i,
                    o,
                    r = ((o = t), 0 <= pt.indexOf(c(o)));
                s(t, "entered"), _(t, n.class_entered), v(t, n.class_exited), (i = t), (o = a), n.unobserve_entered && b(i, o), f(n.callback_enter, t, e, a), r || V(t, n, a);
            }
            function H(t) {
                return t.use_native && "loading" in HTMLImageElement.prototype;
            }
            function B(t, i, o) {
                t.forEach(function (t) {
                    return (a = t).isIntersecting || 0 < a.intersectionRatio ? q(t.target, t, i, o) : ((e = t.target), (n = t), (a = i), (t = o), void (u(e) || (_(e, a.class_exited), $(e, n, a, t), f(a.callback_exit, e, n, t))));
                    var e, n, a;
                });
            }
            function J(e, n) {
                var t;
                et &&
                    !H(e) &&
                    (n._observer = new IntersectionObserver(
                        function (t) {
                            B(t, e, n);
                        },
                        { root: (t = e).container === document ? null : t.container, rootMargin: t.thresholds || t.threshold + "px" }
                    ));
            }
            function K(t) {
                return Array.prototype.slice.call(t);
            }
            function Q(t) {
                return t.container.querySelectorAll(t.elements_selector);
            }
            function W(t) {
                return c(t) === _t;
            }
            function X(t, e) {
                return (e = t || Q(e)), K(e).filter(u);
            }
            function Y(e, t) {
                var n;
                ((n = Q(e)), K(n).filter(W)).forEach(function (t) {
                    v(t, e.class_error), r(t);
                }),
                    t.update();
            }
            function t(t, e) {
                var n,
                    a,
                    t = i(t);
                (this._settings = t),
                    (this.loadingCount = 0),
                    J(t, this),
                    (n = t),
                    (a = this),
                    Z &&
                        window.addEventListener("online", function () {
                            Y(n, a);
                        }),
                    this.update(e);
            }
            var Z = "undefined" != typeof window,
                tt = (Z && !("onscroll" in window)) || ("undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent)),
                et = Z && "IntersectionObserver" in window,
                nt = Z && "classList" in document.createElement("p"),
                at = Z && 1 < window.devicePixelRatio,
                it = {
                    elements_selector: ".lazy",
                    container: tt || Z ? document : null,
                    threshold: 300,
                    thresholds: null,
                    data_src: "src",
                    data_srcset: "srcset",
                    data_sizes: "sizes",
                    data_bg: "bg",
                    data_bg_hidpi: "bg-hidpi",
                    data_bg_multi: "bg-multi",
                    data_bg_multi_hidpi: "bg-multi-hidpi",
                    data_poster: "poster",
                    class_applied: "applied",
                    class_loading: "litespeed-loading",
                    class_loaded: "litespeed-loaded",
                    class_error: "error",
                    class_entered: "entered",
                    class_exited: "exited",
                    unobserve_completed: !0,
                    unobserve_entered: !1,
                    cancel_on_exit: !0,
                    callback_enter: null,
                    callback_exit: null,
                    callback_applied: null,
                    callback_loading: null,
                    callback_loaded: null,
                    callback_error: null,
                    callback_finish: null,
                    callback_cancel: null,
                    use_native: !1,
                },
                ot = "src",
                rt = "srcset",
                ct = "sizes",
                lt = "poster",
                st = "llOriginalAttrs",
                ut = "loading",
                dt = "loaded",
                ft = "applied",
                _t = "error",
                vt = "native",
                gt = "data-",
                bt = "ll-status",
                pt = [ut, dt, ft, _t],
                ht = [ot],
                mt = [ot, lt],
                Et = [ot, rt, ct],
                It = {
                    IMG: function (t, e) {
                        m(t, function (t) {
                            A(t, Et), x(t, e);
                        }),
                            A(t, Et),
                            x(t, e);
                    },
                    IFRAME: function (t, e) {
                        A(t, ht), w(t, ot, l(t, e.data_src));
                    },
                    VIDEO: function (t, e) {
                        a(t, function (t) {
                            A(t, ht), w(t, ot, l(t, e.data_src));
                        }),
                            A(t, mt),
                            w(t, lt, l(t, e.data_poster)),
                            w(t, ot, l(t, e.data_src)),
                            t.load();
                    },
                },
                yt = ["IMG", "IFRAME", "VIDEO"],
                At = {
                    IMG: P,
                    IFRAME: function (t) {
                        k(t, ht);
                    },
                    VIDEO: function (t) {
                        a(t, function (t) {
                            k(t, ht);
                        }),
                            k(t, mt),
                            t.load();
                    },
                },
                kt = ["IMG", "IFRAME", "VIDEO"];
            return (
                (t.prototype = {
                    update: function (t) {
                        var e,
                            n,
                            a,
                            i = this._settings,
                            o = X(t, i);
                        {
                            if ((h(this, o.length), !tt && et))
                                return H(i)
                                    ? ((e = i),
                                        (n = this),
                                        o.forEach(function (t) {
                                            -1 !== kt.indexOf(t.tagName) && F(t, e, n);
                                        }),
                                        void h(n, 0))
                                    : ((t = this._observer),
                                        (i = o),
                                        t.disconnect(),
                                        (a = t),
                                        void i.forEach(function (t) {
                                            a.observe(t);
                                        }));
                            this.loadAll(o);
                        }
                    },
                    destroy: function () {
                        this._observer && this._observer.disconnect(),
                            Q(this._settings).forEach(function (t) {
                                y(t);
                            }),
                            delete this._observer,
                            delete this._settings,
                            delete this.loadingCount,
                            delete this.toLoadCount;
                    },
                    loadAll: function (t) {
                        var e = this,
                            n = this._settings;
                        X(t, n).forEach(function (t) {
                            b(t, e), V(t, n, e);
                        });
                    },
                    restoreAll: function () {
                        var e = this._settings;
                        Q(e).forEach(function (t) {
                            U(t, e);
                        });
                    },
                }),
                (t.load = function (t, e) {
                    e = i(e);
                    V(t, e);
                }),
                (t.resetStatus = function (t) {
                    r(t);
                }),
                Z &&
                    (function (t, e) {
                        if (e)
                            if (e.length) for (var n, a = 0; (n = e[a]); a += 1) o(t, n);
                            else o(t, e);
                    })(t, window.lazyLoadOptions),
                t
            );
        });
        !(function (e, t) {
            "use strict";
            function a() {
                t.body.classList.add("litespeed_lazyloaded");
            }
            function n() {
                console.log("[LiteSpeed] Start Lazy Load Images"),
                    (d = new LazyLoad({ elements_selector: "[data-lazyloaded]", callback_finish: a })),
                    (o = function () {
                        d.update();
                    }),
                    e.MutationObserver && new MutationObserver(o).observe(t.documentElement, { childList: !0, subtree: !0, attributes: !0 });
            }
            var d, o;
            e.addEventListener ? e.addEventListener("load", n, !1) : e.attachEvent("onload", n);
        })(window, document);
    </script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "104962329161797");
    chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
    window.fbAsyncInit = function() {
        FB.init({
        xfbml            : true,
        version          : 'v15.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>