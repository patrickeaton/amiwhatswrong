@extends('layout')

@section('content')

{{ Form::open(array('url'=> 'story/'.$story->id.'/save', 'class'=>'form-story')) }}
 
    {{ Form::text('title', $story->title, array('class'=>'input-block-level', 'placeholder'=>'Display Name')) }}
    {{ Form::textarea('content', $story->content, array('class'=>'input-block-level autoresize', 'placeholder'=>'Content')) }}
    
 
    {{ Form::submit('Save', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}

@stop