@extends('layouts.admin')

@section('content')
<h1>Create a new post</h1>
include('partials.error')
<form action="{{route('admin.blogs.store')}}" method="post" enctype="multipart/form-data">
    @csrf 

    <div class="form-group">
        <label for="titel">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Add a Title" aria-describedby="titleHelper" value="{{old('title')}}">
        <small id="titleHelper" class="text-muted">Type a title for the current post, max 255char</small>
    </div>

    <!-- <div class="form-group">
        <label for="image_url">Cover image</label>
        <input type="text" name="image_url" id="image_url" class="form-control @error('image_url') is-invalid @enderror" placeholder="https://" aria-describedby="image_urlHelper"  value="{{old('image_url')}}">
        <small id="image_urlHelper" class="text-muted">Type a image_url for the current post, max 255char</small>
    </div> -->
    <div class="form-group">
        <label for="image_url">Cover image</label>
        <input type="file" name="image_url" id="image_url">
    </div>
    @error('image_url')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="paragraph"></label>
        <textarea class="form-control @error('paragraph') is-invalid @enderror" name="paragraph" id="paragraph" rows="4">{{old('paragraph')}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>

</form>
@endsection
