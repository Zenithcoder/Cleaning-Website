@extends('layout.master1')

@section('title')
Cleaning Services
@endsection

@section('content')
    
	<!--  <section id="hero_4">
	   
	<div class="intro_title animated fadeInDown">
          
          <div id="map" style="width:1250px;height:400px"> <h1>Contact Us</h1></div>
            
    </div>   <!-- End intro-title --
    
</section><!-- End Section hero_2 -->
    
  <!--  <div id="position">
    	<div class="container">
                    <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Back to Home Page</li>
                    </ul>
        </div>
    </div><!-- End position -->


   <section id="contact-us"  class="section-padding-70">
         <div class="container">
            <!-- Row -->
            <div class="row">
               <div class="col-md-5 col-xs-12 col-sm-12  ">
                  <div class="notice success" id="success">
                    <!-- <p>Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>-->
                  </div>
                 <section class="contact-form-section">
        <h3 class="text-bold text-center">.</h3>

@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif


<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(['route' => 'store.contact', 'method' => 'post']) !!}

<div class="form-group">
    {!! Form::label('From') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>
<div class="form-group">
    {!! Form::label('Telephone') !!}
    {!! Form::text('phone', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your Telephone')) !!}
</div>
<div class="form-group">
    {!! Form::label('Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
      </section>
               </div>
               <div style="padding-top: 70px;" class="col-md-4 col-md-offset- col-xs-12 col-sm-12 margin-top-30">
			   
               <div class="location-box"> <a class="media-left pull-left" href="#"> <!-- <i class=" icon-map"></i>--></a>
                  <div class="media-body">  <strong>Address</strong>
                    <p>Suite 102 Dominion Plaza, Lekki Epe Expressway, Igbo-Efon Lekki, Lagos. </p>
                  </div>
                </div>
                <div class="location-box"> <a class="media-left pull-left" href="#"> <!--<i class=" icon-envelope"></i>--></a>
                  <div class="media-body"> <strong>E-mail</strong>
                    <p>info@mitaneon.com</p>
                  </div>
                </div>
                <div class="location-box"> <a class="media-left pull-left" href="#"><!--<i class="icon-phone"></i>--></a>
                  <div class="media-body"> <!-- <img class="img-responsive" width ="140px" height="60px" alt="" src="images/call-us.png">--><strong>Phone</strong>
                    <p>+2349028511886, +2348025359144</p>
                  </div>
                </div>
                
               <button>   <a href="{{route('home')}}">Back to Home Page</a></button>

               </div>
               
               <div class="clearfix"></div>
            </div>
            <!-- Row End --> 
         </div>
         <!-- end container --> 
      </section>
       
       <section id="hero_4">
     
          <div class="intro_title animated fadeInDown">
          
          <div id="map" style="width:1250px;height:400px"> <h1>Contact Us</h1></div>
            
    </div>   <!-- End intro-title -->
    
</section>


 
@endsection