@extends('layout')


@section('content')

	@if(empty($people))
		There are no people
	@else 
		List of authors
	@endif
		
	@foreach($people as $person) 
	<li>{{$person}}</li>
	@endforeach

@stop

@section('footer')

---------------------

@stop
