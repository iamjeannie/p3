@extends('_master')

@section('content')

	<h1>User Generator</h1>


<br />

{{ Form::open() }}
{{ Form::label("num-users", "Please enter number of users you like to see")}}
{{ Form::text("num_users") }}<br/>
{{ Form::submit("submit") }}
{{ Form::close() }}

<br />
@stop