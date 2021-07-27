@extends('layouts.app')

@section('content')

<div class="container">

    <img width="350" class="img-fluid" src="{{$blog->image_url}}" alt="{{$blog->title}}">

    <div class="card-body">
        <h1 class="card-title">{{$blog->title}}</h1>
        <p class="card-text">{{$blog->paragraph}}</p>
    </div>


    <a href="{{route('blogs.index')}}">Back</a>
</div>

@endsection