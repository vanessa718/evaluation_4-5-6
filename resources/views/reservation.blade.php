@extends('layouts.app')

@section('content')
	<form class="form" method="post">
		<div class="form_reservation">
		<label class="form-label" for="cat-name">Nom / Name <abbr title="champ obligatoire">*</abbr></label>
		<input class="form-field" id="cat-name" name="cat-name" type="text" required>
</div>
<div class="form_reservation">
		<label class="form-label" for="cat-color">Adresse / Adress <abbr title="champ obligatoire">*</abbr></label>
		<input class="form-field" id="cat-name" name="cat-name" type="text" required>
</div>	
<div class="form_reservation">	
		<label class="form-label" for="cat-name">Date d'arrivée <abbr title="champ obligatoire">*</abbr></label>
		<input type="date" class="form-field" id="cat-name" name="cat-name" type="text" required>
		<abbr></label>
	</div>
	<div class="form_reservation">
		<label class="form-label" for="cat-name">Date de départ <abbr title="champ obligatoire">*</abbr></label>
		<input type="date" class="date" id="cat-name" name="cat-name" type="text" required>
	
	</div>	
		<label class="form-label" for="cat-name">Nom de la catégorie <abbr title="champ obligatoire">*</abbr></label>
		<input class="form-field" id="cat-name" name="cat-name" type="text" required>
	<div class="form_reservation">	
		<label class="form-label" for="cat-color">Type de lit <abbr title="champ obligatoire">*</abbr></label>
		<select class="form-field" id="cat-color" name="cat-color" required>
			<option value="single">simple</option>
			<option value="queen">Queen Size</option>
			<option value="king">King Size</option>
		</select>
	</div>	
	</form>
@endsection