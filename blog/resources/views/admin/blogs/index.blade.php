@extends('layouts.admin')

@section('content')

<div class="table-responsive">

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Paragraph</th>
            </tr>
        </thead>

        <tbody>
            
            @foreach($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td><img width="100" src="{{$blog->image_url}}" alt="{{$blog->title}}"></td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->paragraph}}</td>
                <td>view|Edit|Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection