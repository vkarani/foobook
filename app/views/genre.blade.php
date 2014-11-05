@extends('_master')

@section('title')
    Foo Books landing page
@stop

@section('head')
 <!--   <link rel='stylesheet' href='/css/hello-world.css' type='text/css'> -->
@stop

@section('content')
    The chosen genre is {{$genre}}
@stop

@section('footer')
  <!--   <script src="/js/hello-world.js"></script> -->
@stop