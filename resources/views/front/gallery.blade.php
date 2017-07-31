@extends('layout.master')

@section('title')
Gallery
@endsection

@section('content')
    
   <section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Gallery</h1>
            <div class="bs-wizard">
  			
               <!-- <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart.html" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="confirmation.html" class="bs-wizard-dot"></a>
                </div>  
                   -->
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li>Gallery</li>
                    </ul>
        </div>
    </div><!-- End position -->


<div class="container margin_60">
  <div class="main_title">
    <h2>Some <span>images</span> from Gallery</h2>
    <p>
      <!--Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.-->
    </p>
  </div>
  <hr>
  <div class="row magnific-gallery add_bottom_60 ">
      <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/services/1.jpg" title="Photo title"><img src="img/services/1.jpg" alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
        <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/services/2.png" title="Photo title"><img src="img/services/2.png" alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
        <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/services/3.jpg" title="Photo title"><img src="img/services/3.jpg" alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
        <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/slides_bg/4.jpg" title="Photo title"><img src="img/slides_bg/4.jpg" alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
        <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/services/333.jpg" title="Photo title"><img src="img/services/333.jpg" alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
        <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/slides_bg/88.jpg" title="Photo title"><img src="img/slides_bg/88.jpg"   alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/slides_bg/88.jpg" title="Photo title"><img src="img/slides_bg/88.jpg" alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
        <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/services/333.jpg" title="Photo title"><img src="img/services/333.jpg" alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
        <div class="col-md-4 col-sm-4">
      <div class="img_wrapper_gallery">
        <div class="img_container_gallery">
          <a href="img/slides_bg/11.jpg" title="Photo title"><img src="img/slides_bg/11.jpg" alt="Image" class="img-responsive">
            <i class="icon-resize-full-2"></i>
          </a>
        </div>
      </div>
    </div>
    </div>

    <!-- End row -->
  
@endsection