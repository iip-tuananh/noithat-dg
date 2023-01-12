<footer id="footer" class="footer-wrapper">
   <section class="section footer-custom dark" id="section_1615059046">
       <div class="bg section-bg fill bg-fill bg-loaded bg-loaded"></div>

       <div class="section-content relative">
           <div class="row align-bottom footer-custom__top" id="row-716450638">
               <div id="col-343404170" class="col medium-12 small-12 large-4">
                   <div class="col-inner text-center">
                       <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1210507545">
                           <a class="" href="/">
                               <div class="img-inner dark">
                                   <img width="152" height="218" src="{{$setting->logo}}" class="attachment-original size-original" alt="" loading="lazy" />
                               </div>
                           </a>
                           <style>
                               #image_1210507545 {
                                   width: 25%;
                               }

                               @media (min-width: 550px) {
                                   #image_1210507545 {
                                       width: 10%;
                                   }
                               }

                               @media (min-width: 850px) {
                                   #image_1210507545 {
                                       width: 23%;
                                   }
                               }
                           </style>
                       </div>
                   </div>
               </div>

               <div id="col-1398569811" class="col footer-top-right medium-12 small-12 large-8">
                   <div class="col-inner">
                       <div class="row align-middle footer-top-right__row" id="row-561354533">
                           <div id="col-275555946" class="col medium-6 small-12 large-7">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row footer-custom__bottom" id="row-15211059">
               <div id="col-54944190" class="col medium-6 small-12 large-5">
                   <div class="col-inner">
                       <h5 class="uppercase">{{$setting->company}}</h5>
                       <div class="ux-menu stack stack-col justify-start">
                           <div class="ux-menu-link flex menu-item">
                               <a class="ux-menu-link__link flex" href="{{route('home')}}">
                                   <i class="fa-solid fa-location-dot text-center"></i>
                                   <span class="ux-menu-link__text">{{$setting->address1}}</span>
                               </a>
                           </div>
                           <div class="ux-menu-link flex menu-item">
                               <a class="ux-menu-link__link flex" href="tel:{{$setting->phone1}}"> 
                                <i class="pr- fa-solid fa-phone"></i>
                                 <span class="ux-menu-link__text"> Hotline: {{$setting->phone1}} </span> 
                                </a>
                           </div>
                           <div class="ux-menu-link flex menu-item icon-mail">
                               <a class="ux-menu-link__link flex" href="mailto:{{$setting->email}}">
                                   <span class="ux-menu-link__text"> Email: {{$setting->email}}</span>
                               </a>
                           </div>
                       </div>

                   </div>
               </div>

               <div id="col-1834130870" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                       <div class="social-icons follow-icons footer__social">
                           <span>Theo dõi chúng tôi:</span>
                           <a href="{{$setting->facebook}}" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook">
                            <i class="fa-brands fa-facebook"></i>
                           </a>
                       </div>
                       <div id="gap-1074458308" class="gap-element clearfix" style="display: block; height: auto;">
                           <style>
                               #gap-1074458308 {
                                   padding-top: 25px;
                               }
                           </style>
                       </div>
                       <div class="fb-page" data-href="{{$setting->facebook}}" 
                        data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                         data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$setting->facebook}}" class="fb-xfbml-parse-ignore">
                        <a href="{{$setting->facebook}}">{{$setting->company}}</a></blockquote></div>
                      </div>
               </div>
               <div id="" class="col medium-6 small-12 large-3">
                <div class="col-inner">
                    <div class="social-icons follow-icons footer__social">
                        <span>Bản đồ:</span>
                    </div>
                    <div id="gap-1074458308" class="gap-element clearfix" style="display: block; height: auto;">
                        <style>
                            #gap-1074458308 {
                                padding-top: 25px;
                            }
                        </style>
                    </div>
                    {!!$setting->iframe_map!!}
                     </div>
                    
                </div>
            </div>
           </div>
       </div>

       <style>
           #section_1615059046 {
               padding-top: 30px;
               padding-bottom: 30px;
               background-color: rgb(4, 4, 4);
           }
       </style>
   </section>

   <div class="absolute-footer dark medium-text-center small-text-center">
       <div class="container clearfix">
           <div class="footer-secondary pull-right">
               <div class="footer-text inline-block small-block">{{ date('Y') }} <strong>{{$setting->company}}</strong>. All right reserved.</div>
           </div>
       </div>
   </div>
</footer>