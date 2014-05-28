@extends('layout')

@section('content')

@foreach ($stories as $story)
    <div class='content_left'>
        	
   <h2>{{ HTML::link('story/'.$story->id, $story->title) }}</h2>
   		{{$story->content}}
	</div>
@endforeach

        
@stop
