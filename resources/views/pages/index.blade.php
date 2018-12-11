@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Min första Laravel App</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Logga in</a> <a class="btn btn-success btn-lg" href="/login" role="button">Registrera dig</a></p>
  </div>
@endsection
