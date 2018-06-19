@extends('layouts.app')

@section('content')


<form action="/booking" class="form" method="post">
	{{ csrf_field() }}
		<div class="form-row">
    		<div class="form-group col-md-6">
		      <label for="inputLastName4">Last Name</label>
		      <input type="last_name" class="form-control" id="inputLastName4" placeholder="Last Name">
    		</div>
		    <div class="form-group col-md-6">
		      <label for="inputFirstName4">First Name</label>
		      <input type="first_name" class="form-control" id="inputFirstName4" placeholder="First Name">
		    </div>
		</div>    
		<div class="form-group">
		    <label for="inputAddress">Address</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
		</div>
		<div class="form-group">
		      <label for="inputEmail4">Email</label>
		      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
		   </div>
		<div class="form-row">	  
		    <div class="form-group col-md-6">
		    <label for="inputPhone">Phone</label>
		    <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
		</div>
		<!--<div class="form-group col-md-6">
		      <label for="inputPassword4">Password</label>
		      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
		    </div>
		</div> 
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">City</label>
		      <input type="text" class="form-control" id="inputCity" placeholder="City">
			</div>
			<div class="form-group col-md-6">
		      <label for="inputCountry">Country</label>
		      <input type="text" class="form-control" id="inputCountry" placeholder="Country">
			</div>
   		</div> -->
    </div>
  </div>
  <button type="submit" class="btn btn-secondary btn-lg active btn_focus">Réserver</button>
</form>
@endsection