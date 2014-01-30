@extends('masters.master')


@section('centre')
	<div class="col-md-9">
	    Centre
	</div>
@stop

@section('droit')
	@parent
	<div class="col-md-3">
	    Droit
	</div>
@stop 