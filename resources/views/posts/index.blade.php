@extends('layouts.app', ['body_class' => 'body__posts'])

@section('content')
    <h1>Posts</h1>
  
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="card card-body bg-light">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Publicerad {{$post->created_at}} av: {{$post->user->name}}</small>
        </div>
        @endforeach
        {{$posts->links()}}
    @else 
    <p>No posts found</p>
    @endif
@endsection