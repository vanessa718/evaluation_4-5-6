@extends('layouts.app') 


@section('content')
<section>
	<div class="container">	
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<img src="/img/room.jpeg" class="img-fluid" alt="Responsive image">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center line">
	  			<p class="name">{{$room -> name}}</p>
	  		</div>	
	  	</div>
	  	<div class="row">
	  		<div class="col bed_type_access">
	  			<p>{{$room -> price}}</p>
	  			<p>{{$room -> bed_type_access}}</p>
	  		</div>
	  	</div>
	  	<div class="row ">
	  		<div class="col-md-12">
		  		<div class="col-md-6 text-left">
		  			<p>{{$room -> address}}</p>
		  			<p>{{$room -> town}}</p>
		  		</div>
		  		<div class="col-md-6 text-right">
		  			<p>{{$room -> mail}}</p>
		  			<p>{{$room -> phone}}</p>
		  		</div>
		  	</div>	
	  	</div>
	</div>
  
      
</section> 
@endsection