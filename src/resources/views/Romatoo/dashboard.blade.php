@extends('Romatoo.main')

@section('content')

@include('Romatoo.components.style')

<div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">
        <h4>Welcome {{$user->first_name}} {{$user->last_name}} !</h4>
		@include('Romatoo.components.compose')
	</div>
</div>

<div class="card">
	<div class="card-header mt-4">
		@include('Romatoo.components.filter')
	</div>

	<div class="card-body mt-4">
		<h5>You have a total of {{$emails->count()}} messages.</h5>
		@include('Romatoo.components.inbox')
	</div>

</div>

@endsection('content')