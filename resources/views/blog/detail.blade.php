@extends('layout/main')
@extends('layout/header')
@section('style')
    <link rel="stylesheet" href="{{asset('css/home/main.css')}}">
@endsection


@section('body')
    {{$blog->title}} <br>
    {{$blog->description}} <br>
    {{$blog->content}}
@endsection