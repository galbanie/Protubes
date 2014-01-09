@extends('masters.master')


@section('gauche')
    @parent
	   	<div class="col-md-2">
	    	Gauche
	   	</div>
@stop
@section('centre')
	<div class="col-md-7">
	    Centre
	</div>
@stop
@section('droit')
	@parent
	<div class="col-md-3">
	    Droit
	</div>
@stop 