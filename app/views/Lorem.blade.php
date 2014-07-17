@extends('_master')

@section('content')

	<h1>Lorem Generator</h1>


<br />

{{ Form::open() }}
{{ Form::label("num-paragraphs", "Please enter number of paragraphs you like to see")}}
{{ Form::text("num_paragraphs") }}<br/>
{{ Form::submit("submit") }}
{{ Form::close() }}

<br />
@stop