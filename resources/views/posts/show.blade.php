@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-secondary">Tillbaka</a>
    <h1>{{$post->title}}</h1>
    
    <div class="post-body">
        {{$post->body}}
        <hr>
        <small>Publicerad {{$post->created_at}}</small>
    </div>
@endsection