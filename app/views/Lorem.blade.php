@extends('_master')
@section('content')

	<h1>Ipsum Lorem Generator</h1>
	
<!-- step 1 : get input from form -->

   {{ Form::open() }}
        <label for="num_paragraphs">
          <span>Please enter number of paragraphs you would like to generate</span>
          <input type="number" id="num_paragraphs" name="num_paragraphs" 
       		@if (key_exists('num_paragraphs', $input)) value="{{{ $input['num_paragraphs'] }}}" @endif>
        </label>
    	<button type="submit">Show me now!</button>
    {{ Form::close() }}

<br />

<!-- step 2 : return result  -->

  @foreach ($lorem as $paragraph)
    <p>{{ $paragraph }}</p>
  @endforeach



@stop