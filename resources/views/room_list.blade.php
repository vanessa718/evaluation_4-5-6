@extends('layouts.app') 


@section('content')
<section class="container">
	<div class="room">	
  		<h1>Chambres</h1>
	</div>
	
  	<table class="table">
  		<tbody>
			<tr class="cell">
				<th>Chambre</th>
				<th>Suite ou standard</th>
				<th>Prix/ nuit</th>
				<th>Accessibilité PMR</th>
				<th>Type de lit</th>
			</tr>	
				@foreach ($rooms as $room)
  			<tr>
		  		<td class="cell"><a href="{{action('RoomController@show', $room['id'])}}" class="btn btn-view">{{$room ['name']}}</a></td>
		  				 
				<td class="cell">
				@if ($room ['is_suite'] == 1)
							suite
				@else 
							standard		
				@endif
				</td>
				<td class="cell">{{$room ['price']}}</td>
				<td class="cell">
				@if ($room ['reduced_mobility_access'] == 1)
							oui
				@else 
							non	
				@endif
				</td>
				<td class="cell">
				@if ($room ['bed_type_id'] == 1)
							Single
				@elseif ($room ['bed_type_id'] ==2) 
							Queen size
				@else 	
							King Size			
							
				@endif
				</td>
			</tr>		 
				@endforeach
		</tbody>
	</table>	
	
</section>
@endsection