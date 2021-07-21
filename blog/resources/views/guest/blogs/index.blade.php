@extends('layouts.app')

@section('content')
<h1>PRINCIPAL BLOG</h1>
<div class="container">
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-md-4">
            <div class="card text-left">
              <img width="100" class="card-img-top" src="{{$blog->image_url}}" alt="{{$blog->title}}">
              <div class="card-body">
                <h4 class="card-title">{{$blog->title}}</h4>
                <p class="card-text">{{$blog->paragraph}}</p>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection