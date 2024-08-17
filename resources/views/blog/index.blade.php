@extends('layout/main')
@extends('layout/header')
@section('style')
    <link rel="stylesheet" href="{{asset('css/home/main.css')}}">
@endsection


{{$blogs}}
@section('body')
        @foreach ($blogs as $blog )
            <a href="/blog/{{$blog->id}}"> {{ $blog->title; }} </a> <br>
            
        @endforeach
@endsection