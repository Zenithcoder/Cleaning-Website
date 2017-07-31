@extends('layout.master')

@section('title')
Co-working Space
@endsection

@section('content')
    
	   <section id="hero_3">
	<div class="intro_title animated fadeInDown">
           <h1>Co-working</h1>
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
                    <li>Co-work</li>
                    </ul>
        </div>
    </div><!-- End position -->


   <section id="contact-us" class="section-padding-70">
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

{!! Form::open(['route' => 'store.cowork', 'method' => 'post']) !!}

<div class="form-group">
    {!! Form::label('From') !!}
    {!! Form::date('from', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'select a date')) !!}
</div>

<div class="form-group">
    {!! Form::label('To') !!}
    {!! Form::date('to', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'select a date')) !!}
</div>
<div class="form-group">
    {!! Form::label('Space') !!}
    {!! Form::select('space', ['A1' => 'A1', 'A2' => 'A2', 'B1' => 'B1', 'B2' => 'B2', 'C1' => 'C1'], null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Pick a space form the map')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Book', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
      </section>
               </div>
               <div style="padding-top: 70px;" class="col-md-4 col-md-offset-2 col-xs-12 col-sm-12 margin-top-30">
			   
               <div class="location-box"> <a class="media-left pull-left" href="#"> <!-- <i class=" icon-map"></i>--></a>
                  <div class="media-body">  <strong>Rate per day</strong>
                    <p>$45</p>
                  </div>
                </div>
                <div class="location-box"> <a class="media-left pull-left" href="#"> <!--<i class=" icon-envelope"></i>--></a>
                  <div class="media-body"> <strong>Rate per month</strong>
                    <p>$450</p>
                  </div>
                </div>
                <div class="location-box"> <a class="media-left pull-left" href="#"><!--<i class="icon-phone"></i>--></a>
                  <div class="media-body"> <!-- <img class="img-responsive" width ="140px" height="60px" alt="" src="images/call-us.png">--><strong>Payment Option</strong>
                    <p>Online/Teller </p>
                  </div>
                </div>
                
               </div>
               
               <div class="clearfix"></div>
            </div>
            <!-- Row End --> 
         </div>
         <!-- end container --> 
      </section>
 
@endsection