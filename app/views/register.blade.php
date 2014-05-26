@extends('layout')

@section('content')

{{ Form::open(array('url'=>'create', 'class'=>'form-signin')) }}
    <h2 class="form-signup-heading">Register</h2>
 
    {{ Form::text('name', null, array('class'=>'input-block-level', 'placeholder'=>'Display Name')) }}
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
    {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
 
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}

@stop