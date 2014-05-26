@extends('layout')

@section('content')

{{ Form::open(array('url'=> 'user/'.$user->id.'/save', 'class'=>'form-story')) }}
 
    {{ Form::text('name', $user->name, array('class'=>'input-block-level', 'placeholder'=>'Display Name')) }}
    {{ Form::textarea('about', $user->about, array('class'=>'input-block-level autoresize', 'placeholder'=>'About Me')) }}
    
 
    {{ Form::submit('Save', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}

@stop