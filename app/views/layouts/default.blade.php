@extends('masters.master')

@section('jumbotron')
	<div class="jumbotron">
		<div class="container">
			<h2>Bienvenue sur Protubes !</h2>
  			<p> la plateforme vidéo d'apprentissage et d'information professionelle... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  			<p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
		</div>
	</div>
@stop

@section('gauche')
    @parent
	<div class="col-md-2">
	    Gauche
	</div>
@stop

@section('centre')
	<div class="col-md-7">
	    
	<!-- Section slide main -->
	@include('sliders.default-slider')

	</div>
@stop

@section('droit')
	@parent
	<div class="col-md-3">
	    <div class="row">
	    	<div class="col-md-12">
	    		<a href="#">
	    			<img src="Ressources/Images/icone_video.png" icone_video.pngss="img-rounded" style="">
	    		</a>
	    	</div>
	    </div>
	</div>
@stop 