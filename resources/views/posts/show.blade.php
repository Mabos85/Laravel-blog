@extends('layouts.app', ['body_class' => 'body__post'])

@section('content')
<a href="/posts" class="btn btn-secondary">Tillbaka</a>
    <h1>{{$post->title}}</h1>
    
    <div class="post-body">
        {!!$post->body!!}
        <hr>
        <small>Publicerad {{$post->created_at}} av: {{$post->user->name}}</small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
@endsection