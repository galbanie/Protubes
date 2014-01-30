@extends('layouts.membre')

@section('content')
	<div class="jumbotron">
	  <div class="container">
	    ...
	  </div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h3>Pro Populaires</h3>
			<?php $i = 1;?>
			@foreach ($membres as $membre)
				<!--li>{{ HTML::linkAction('ControllerMembre@show', $membre->identifiant, array($membre->identifiant)) }}</li-->
				@if(($i % 4 == 0))
				<div class="row">
				@endif
  					<div class="col-sm-6 col-md-4">
    					<div class="thumbnail">
      						<!--img data-src="holder.js/300x200" src="" alt="..."-->
      						{{ HTML::image('Ressources/Images/Profil_default.jpg','...', array('class'=>'img-circle')) }}
	      					<div class="caption">
		        				<h3>{{ $membre->identifiant }}</h3>
		        				<p>...</p>
		        				<p style="text-align: center;">
		        					{{ HTML::linkAction('ControllerMembre@show', 'Profile', array($membre->identifiant),array('class'=>'btn btn-primary','role'=>'button')) }}
		        					<!--a href="#" class="btn btn-primary" role="button">Button</a--> 
		        					<a href="#" class="btn btn-default" role="button">Button</a>
		        				</p>
	      					</div>
    					</div>
  					</div>
  				@if(($i % 4 == 0))
				</div>
				@endif
			<?php $i++;?>
			@endforeach
		</div>
		<div class="col-md-4">
			<h3>Séries du moment</h3>
		</div>
	</div>
@endsection