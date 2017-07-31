@extends('layout.master')

@section('title')
Property Services
@endsection

@section('content')
    
   <section id="hero_5">
	<div class="intro_title animated fadeInDown">
           <h1>Facility Management</h1>
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
                    <li>Facility Management</li>
                    </ul>
        </div>
    </div><!-- End position -->
<!--<div class="col-md-6 col-md-offset-2"><h3>Please request a quote for your cleaning services</h3></div>-->
<div class="col-md-8 col-md-offset-2" style="font-weight:bold; font-size: 16px"><h2 style="text-align:center;"> Hand over your facility and subcontractors to us and we will manage the entire process for you.</h2><p>We also render the following services directly:</ul></p><ul style="font-size: 14px;"><li>Fumigation</li><li>Pest control</li><li>Gardening </li><li>Landscaping</li><li>Septic tank evacuation</li></div>
<div class="container margin_60">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<div id="login">
    <ul style="color:red;">
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
                    		 
                            <form method="POST" action="{{route('store.property')}}">
                            {{csrf_field()}}
          @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
    @endif
        @if(!Session::has('message')) <p>Please complete the form below to request a quote.@endif</p>
                <div class="form-group">
                <label for="name" accesskey="F">First Name</label>
                <input name="name" type="text" id="name" value="" class="form-control" placeholder="Please enter your First Name"/>
              </div>

              <div class="form-group">
                <label for="name" accesskey="L">Last Name</label>
                <input name="lname" type="text" id="lname" value="" class="form-control" placeholder="Please enter your Last Name"/>
              </div>
              <div class="form-group">
                <label for="address" accesskey="N">Address</label>
                <input name="address" type="text" id="address" value="" class="form-control" placeholder="Please enter your Address"/>
              </div>
                               <div class="form-group">
                <label for="phone" accesskey="T">Telephone</label>
                <input name="phone" type="text" id="phone" value="" class="form-control" placeholder="Please enter your phone"/>
              </div>

              <div class="form-group">
                <label for="email" accesskey="E">E-mail</label>
                <input name="email" type="text" id="email" value="" class="form-control" placeholder="Please enter your E-mail"/>
              </div>
                                 <div class="form-group">
                <label for="facility">Type of Facility</label>
                <div  class="form-group"> </i> </div>
                <select class="form-control" name="facility" id="facility">
                  <option selected="selected" disabled="disabled">Select Type</option>
                
                  <option value="School">School</option>
                  <option value="Hospital">Hospital</option>
                   <option value="Church">Church</option>
                    <option value="Events Centre">Event Centre</option>
                     <option value="Restaurant">Restaurant</option>
                      <option value="Car Park">Car Park</option>
                       <option value="Generator House">Generator House</option>
                   <option value="Residential - apartment">Residential - apartment</option>
                    <option value="Residential - semi detached">Residential - semi detached</option>
                   <option value="Residential - terrace">Residential - terrace</option>
                   <option value="Residential - fully detached">Residential - fully detached</option>
                   <option value="Shopping Mall">Shopping Mall</option>
                   <option value="Supermarket">Supermarket</option>
                    <option value="Factory">Factory</option>
                   <option value="Warehouse">Warehouse</option>
                   <option value="Residential -Estate">Residential -Estate</option>
                   <option value="Office building">Office building</option>
                   <option value="Highrise building">Highrise building</option>
                   <option value="Others">Others</option>
                   
                </select>
              </div>
              <div class="form-group">
                <label for="service">Service Type</label>
                <div  class="form-group"> </i> </div>
                <select class="form-control" name="service" id="service">
                  <option selected="selected" disabled="disabled">Select Type</option>
                
                  <option value="Fumigation & Pest Control">Fumigation & Pest Control</option>
                  <option value="Septi Tank Evacuation">Septi Tank Evacuation</option>
                  <option value="Gardening & Landscaping">Gardening & Landscaping</option>
                  <option value="Office Partitioning">Office Partitioning</option>
                  <option value="Subcontractor Management">Subcontractor Management</option>
                  <option value="Others">Others</option> 
            
                </select>
              </div>
                                 
                                <div class="form-group">
              <button type="submit" class="btn btn-primary  btn-sm">Submit! Now</button>
            </div> 
                            </form>
                        </div>
		</div>
        
	</div><!--End row -->
</div><!--End container -->
 
@endsection