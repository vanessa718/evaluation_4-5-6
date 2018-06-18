@extends('layouts.app') 


@section('content')
<section>
	<div class="container">	
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<img src="/img/room.jpeg" class="img-fluid img_focus" alt="Responsive image">
	  			<p class="name">{{$room -> name}}</p>
			</div>
		</div>
	  	<div class="row">
	  		<div class="col focus">
	  			<p>Prix: {{$room -> price}}€/nuit</p>
				<p>Etage: {{$room -> floor}}</p>

	  			<p>{{$room -> bed_type_access}}</p>
	  		</div>
	  	</div>
	  	
	</div>
	
</section> 
@endsection