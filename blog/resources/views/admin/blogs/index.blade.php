@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between">
        <h1>ALL POSTS</h1>
        <div class="">
            <a href="{{route('admin.blogs.create')}}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i> Add a Post
            </a>
        </div>
    </div>


    <div class="table-responsive">
    
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Paragraph</th>
                    <th>Actions</th>
                </tr>
            </thead>
    
            <tbody>
                
                @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td><img width="200" src="{{$blog->image_url}}" alt="{{$blog->title}}"></td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->paragraph}}</td>
                    <td>
                        <a href="{{route('admin.blogs.show', $blog->id )}}" class="btn btn-primary">
                            <i class="fas fa-eye fa-sm fa-fw"></i>
                        </a>

                        <a href="{{route('admin.blogs.edit', $blog->id )}}" class="btn btn-secondary">
                            <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                        </a>

                        
                        <form action="{{route('admin.blogs.destroy', $blog->id )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
    
                                <i class="fas fa-trash fa-sm fa-fws"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection