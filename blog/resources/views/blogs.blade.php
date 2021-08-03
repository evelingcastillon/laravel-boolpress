@extends('layouts.app')

@section('content')
<div id="app">
    
    <h1>Vue Blogs</h1>
    <div class="container">
        <div class="card text-left" v-for="blog in blogs">
          <img class="card-img-top" :src="game.image_url" alt="">
          <div class="card-body">
            <h4 class="card-title">@{{blog.title}}</h4>
            <p class="card-text">Body</p>
          </div>
        </div>
    </div>
</div>
@endsection