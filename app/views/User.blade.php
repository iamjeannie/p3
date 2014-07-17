@extends('_master')

@section('content')


	<h1>User Name Generator</h1>

<!-- step 1 : get input from form -->
{{ Form::open() }}
        <label for="num_users">
          <span>Please enter number of users you would like to generate</span>
          <input type="number" id="num_users" name="num_users"
            @if (key_exists('num_users', $input)) value="{{{ $input['num_users'] }}}" @endif>
        </label>
        <button type="submit">Show me now!</button>
    {{ Form::close() }}
<br />

<!-- step 2 : return result -->
@if ($users)

  @foreach ($users as $user)
    <p>{{{ $user['name'] }}}</p>
  @endforeach

  @endif 

@stop
