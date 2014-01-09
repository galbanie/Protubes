@extends('layouts.'.$layout)

@section('content')

	<div class="row">
		<div class="col-md-3">
			<h3>Messages</h3>
		</div>
		
		@include('formulaires.'.$form)

	</div>

@endsection