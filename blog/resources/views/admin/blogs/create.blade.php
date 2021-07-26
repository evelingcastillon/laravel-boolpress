@extends('layouts.admin')

@section('content')
<h1>Create a new post</h1>
<form action="{{route('admin.blogs.store')}}" method="post">
@csrf 

    <div class="form-group">
    <label for="titel">Title</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Add a Title" aria-describedby="titleHelper" value="{{old('title)}}">
    <small id="titleHelper" class="text-muted">Type a title for the current post, max 255char</small>
    </div>

    <div class="form-group">
    <label for="image_url">Cover image</label>
    <input type="text" name="image_url" id="image_url" class="form-control" placeholder="https://" aria-describedby="image_urlHelper"  value="{{old('image_url)}}">
    <small id="image_urlHelper" class="text-muted">Type a image_url for the current post, max 255char</small>
    </div>

    <div class="form-group">
    <label for="paragraph"></label>
    <textarea class="form-control" name="paragraph" id="paragraph" rows="4">{{old('paragraph)}}</textarea>
    </div>

<button type="submit" class="btn btn-success">Submit</button>

</form>
@endsection