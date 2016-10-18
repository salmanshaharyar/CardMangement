@extends('layout')

@section('content')
	<div class="row">

	<div class= "col-md-6 cold=md-offset-3">
		<h1>{{ $card->titile}}</h1>


		<ul class="list-group">
			@foreach ($card->notes as $note)
			<li class="list-group-item">
				{{ $note->body }}
				<a href="#" class="pull-right">{{$note->user->username}}</a>
				</li>

			@endforeach
		</ul>


		<hr>
		<h3>Add a New Note</h3>



		<form method="POST" action="/cards/{{$card->id}}/notes">
			{{ csrf_field() }}

			<input type="hidden" name="user_id" value="1">
			
			<div class="form-group">
				<textarea name="body" class="form-control">{{old('body')}}</textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>
		</form>


		@if(count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
		@endif


		</div>
	</div>

@stop

