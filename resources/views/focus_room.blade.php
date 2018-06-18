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
	  		<div class="col focus text-center">
	  			<p>Prix: {{$room -> price}}€/nuit</p>
				<p>Etage: {{$room -> floor}}</p>
				<p> Accessibilité PMR: 
					@if ($room ['reduced_mobility_access'] == 1)
								oui
					@else 
								non	
					@endif
				</p>
				<P>Type de chambre: 
					@if ($room ['is_suite'] == 1)
								suite
					@else 
								standard		
					@endif
				</P>
	  			<p>Type de lit:
		  			@if ($room ['bed_type_id'] == 1)
								Single
					@elseif ($room ['bed_type_id'] == 2) 
								Queen size
					@else 	
								King Size			
								
					@endif
				</p>
				<p>Vue:
					@if($room ['views'] == 1)
						Seaview
					@elseif ($room ['views'] == 2)
						Mountain view
					@elseif ($room ['views'] == 3)
						Park view
					@else (room ['views'] == 4)
						Not	specified
					@endif			
				</p>
	  		</div>
	  	</div>
	  	
	  	<a href="{{action('BookingController@index', $room['id'])}}" class="btn btn-secondary btn-lg active btn_focus" role="button" aria-pressed="true">Réservation</a>
	  	

	</div>
	
</section> 
@endsection