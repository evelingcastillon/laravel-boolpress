@extends('layouts.admin')

@section('content')

    <img width="200" src="{{$blog->image_url}}" alt="{{$blog->title}}">

    <h1>{{$blog->title}}</h1>
    
    <p>{{$blog->paragraph}}</p>

    <a href="{{route('admin.blogs.index', $blog->id )}}" class="btn btn-primary">
        <i class="fas fa-arrow-left fa-sm fa-fw"></i> Back
    </a>

    <a href="{{route('admin.blogs.edit', $blog->id )}}" class="text-muted">
        Edit 
    </a>

    <a href="" class="btn btn-danger">
        <i class="fas fa-trash fa-sm fa-fws"></i>
    </a>

@endsection