@extends('layouts.app', ['body_class' => 'body__home'])
@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
   
    <p>Logga in och dela med dig av dina smultronställen </p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Logga in</a> 
      <a class="btn btn-success btn-lg" href="/register" role="button"><i class="fas fa-user-alt"></i> Registrera dig</a></p>
  </div>




@endsection
