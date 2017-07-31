@extends('layout.master')

@section('title')
HomePage
@endsection

@section('content')
 

    <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/9.png" alt="slidebg1" data-lazyload="img/slides_bg/9.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Facility Management
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            Quality control is a vital part of all our processes</div>
                    </div>
                    <!-- LAYER NR. 3 -
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>
                    </div>-->
                </li>
               <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/10.jpg" alt="slidebg1" data-lazyload="img/slides_bg/10.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Sub-Contractor Management
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase;">
                            <!--expert cleaning and hygiene services solutions to businesses and individuals across Nigeria--></div>
                    </div>
                    <!-- LAYER NR. 3 -
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">5% Discount for all online bookings. </a> <a href='single_tour.html' class=" button_intro outline">Hurry now and book online</a>
                    </div>-->
                </li>
                
               <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/3.jpg" alt="slidebg1" data-lazyload="img/slides_bg/3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Carpet Cleaning
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase"><!--Carpet Cleaning-->
                            </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><!--<a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>-->
                    </div>
                </li>

            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!-- End Slider -->

    <div align="center" style="font-size: 24px; color: orange; font-weight:900;"><marquee>5% Discount on all online bookings. Hurry now and book online</marquee></div>
    
    <div class="white_bg">
        <div class="container margin_60">
             
             
            
            <div class="row">
                
                <div class="col-md-6 col-sm-6 text-center">
                    <div class="col-sm-offset-3">
                        <a href="{{route('home.clean')}}"><img src="img/services/88.jpg" alt="Pic" class="img-responsive"></a>
                    </div>
                    <h4>Professional  <span style="color:green; font-weight: bold;">Cleaning</span></h4>
                    <p style="font-weight: bold;">
                       We are experts in janitorial, post construction, post renovation and industrial cleaning for  your home and business. 
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 text-center">
                   <div class="col-sm-offset-3">
                        <a href="{{route('home.property')}}"><img src="img/services/11.jpg" alt="Pic" class="img-responsive"></a>
                        </div>
                   
                    <h4><span style="color:green; font-weight: bold;">Facility</span> Management</h4>
                    <p style="font-weight: bold;">
                        We offer a range of professional services such as pest control and fumigation, septic tank evacuation, gardening & landscaping and subcontractor management. 
                    </p>
                </div>
                
                <!--<div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Hotel</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>-->
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End white_bg -->
    
    <!-- <div class="container margin_60">
    
        <div class="main_title">
            <h2>OUR CLIENTS</h2>
            <p>
                Some of our Clients.
            </p>
        </div>
        
        <div class="row">
        
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                   <!-- <i class="icon_set_1_icon-41"><p>we are rich we are into it </p></i>-
                   <img src="img/client1.png" class="img-responsive" width="50%" height="50%">
                     
                  <!--  <a href="about.html" class="btn_1 outline">Read more</a>-
                </div>
            </div>
            
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                   <img src="img/client1.png" class="img-responsive" width="50%" height="50%">
                </div>
            </div>
            
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <img src="img/client1.png" class="img-responsive" width="50%" height="50%">
                </div>
            </div>
            
        </div><!--End row --

        <div class="container margin_60">
    
        <div class="main_title">
            <h2>TESTIMONIALS</h2>
            <p>
                Satisfactorily reviews from our clients.
            </p>
        </div>
        
        <div class="row">
        
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <p><span style="color: red;">"Perfection is an under statement"</span> <br> James Kelly <br>MD Royal Castle</p>

                </div>
            </div>
            Best customer service ever
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                   <p>Best customer service ever <br> Onuora Blessing <br>Manager TP Construction Ltd</p>

                </div>
            </div>
            
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <p>Perfection is an under statement <br> James Kelly <br>MD Royal Castle</p>

                </div>
            </div>
            
        </div><!--End row -

        <div class="container margin_60">
    
        <div class="main_title">
            <h2>GALLERY</h2>
            <p>
                Our gallery.
            </p>
        </div>
        
        <div class="row">
        
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <img src="img/services/services-9.png" class="img-responsive" width="50%" height="50%">
                </div>
            </div>
            
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                     <img src="img/services/33.png" class="img-responsive" width="50%" height="50%">
                </div>
            </div>
            
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <img src="img/services/services-8.png" class="img-responsive" width="50%" height="50%">
                </div>
            </div>
             <a href="#"  style="margin-left: 500px;" class="btn_1 outline">Click Here for more</a>
        </div><!--End row -->
    <section id="about" class="promo_full">
    <div class="promo_full_wp magnific">
        <div style="font-size: 14px;">
           <h3 >ABOUT US</h3>
            <p>
                We are a team of facility managers focused on the soft services of facility management. Our objective is to reinvent the maintenance culture by incorporating efficient techniques of getting the job done and right the first time.</p>

<h4>Mission</h4>
            <p>
         To be a world class facility management company.</p>

        <h4>Vision</h4>
            <p>
        To provide quality services using best practices by professionals and ensuring the environment is safe.</p>

 
           <!--<a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video"><i class="icon-play-circled2-1"></i></a>-->
        </div>
    </div>
    </section><!-- End section -->
    
    <div class="container margin_60">
    
        <div class="main_title">
            <h2>WHY  <span>PEOPLE </span> CHOOSE US</h2>
            <p>
                We are committed to service delivery with the highest standard of professionalism and quality.
            </p>
        </div>
        
        <div class="row">
        
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span></span> OUR CLIENTS</h3>
                    <p>
                        Some of our Clients.
                    </p>
                  <a href="{{route('home.clients')}}" class="btn_1 outline">Read more</a>
                </div>
            </div>
            
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-30"></i>
                    <h3><span></span> TESTIMONIALS</h3>
                    <p>
                       Excellent reviews from our clients.
                    </p>
                 <a href="{{route('home.testimonial')}}" class="btn_1 outline">Read more</a>
                </div>
            </div>
            
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-57"></i>
                    <h3><span></span> GALLERY</h3>
                    <p>
                        Our gallery.
                    </p>
                     <a href="{{route('home.gallery')}}" class="btn_1 outline">Read more</a>
                </div>
            </div>
            
        </div><!--End row -->
        
        <hr>
        
      <!--  <div class="row">
            <div class="col-md-8 col-sm-6 hidden-xs">
                <img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3><span>Get started</span> with CityTours</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <ul class="list_order">
                    <li><span>1</span>Select your preferred tours</li>
                    <li><span>2</span>Purchase tickets and options</li>
                    <li><span>3</span>Pick them directly from your office</li>
                </ul>
                <a href="all_tour_list.html" class="btn_1">Start now</a>
            </div>
        </div> End row -->
        
    </div><!-- End container -->
 
@endsection