@extends('layout')

@section('content')
   <div class='content_left'>
    	
   <h2>{{ $story->title }}</h2>
   @if(Auth::user()->id == $story->user_id)
   	{{ HTML::link('story/'.$story->id.'/edit', 'Edit Article') }}	
   @endif 
   {{ $story->content }}
	</div>
@stop
