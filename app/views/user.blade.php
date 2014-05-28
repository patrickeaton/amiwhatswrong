@extends('layout')

@section('content')
        <div class='content_left'>
        	  	 <div class = 'circular' style="background-image:url('{{asset('images/'.$user->image)}}');"></div>
   <h2>{{ $user->name }}</h2>
   @if(Auth::user()->id == $user->id)
   	{{ HTML::link('user/'.$user->id.'/edit', 'Edit User') }}	
   @endif 

   <p>{{ $user->about }}</p>

	</div>
	 @foreach ($stories as $story)
    <div class='content_left'>
        	
   <h2>{{ HTML::link('story/'.$story->id, $story->title) }}</h2>
   		{{$story->content}}
	</div>
	@endforeach
@stop
