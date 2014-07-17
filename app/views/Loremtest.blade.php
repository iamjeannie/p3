@extends('master')

@section('content')
<section>
  <h2>Lorem Ipsum Generator</h2>
  

    {{ Form::open() }}
      <p><label for="num_paragraphs">
          <span>Please enter number of paragraphs you would like to generate</span>
          <input type="number" id="num_paragraphs" name="num_paragraphs" value="{{{ $input["num_paragraph"] }}}">
        </label>
      </p>

      
  		<button type="submit">Show me now!</button>
 
    {{ Form::close() }}


  @if ($lorem)
	  @foreach ($lorem as $paragraph)
	    <p>{{ $paragraph }}</p>
	  @endforeach
  @endif

</section>
@stop