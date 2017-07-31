 @extends('layout.master')

@section('title')
Co-Work
@endsection
@section('content')
 <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12" id="shift-container">
					<h1 style="color: black;">COMING SOON</h1>
					<h2 style="color: black;" class="subtitle">A new location for co work space</h2>
					<p style="color: black;" class="subtitle"> Signup to get notified when we launch.</p>
					<form method="POST" action="{{route('store.news')}}">
                            {{csrf_field()}}
          @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
    @endif
					  <div class="form-group">
					    <input type="email" class="form-control" name ="email" id="exampleInputEmail1" placeholder="Enter your email address">
					  </div>
					  <button type="submit" class="btn btn-theme">Get notified!</button>
					</form>		
				</div>
				
			</div>
		</div>
	</div>
  
</body>
@endsection