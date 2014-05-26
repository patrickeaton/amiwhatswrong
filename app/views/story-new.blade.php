@extends('layout')

@section('content')

{{ Form::open(array('url'=> 'save', 'class'=>'form-story')) }}

    {{ Form::text('title', null, array('class'=>'input-block-level', 'placeholder'=>'Title')) }}
    {{ Form::textarea('content', null, array('class'=>'input-block-level autoresize', 'placeholder'=>'Content')) }}
 
    {{ Form::submit('Save', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}

@stop