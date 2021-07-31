<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ddd($request->all());
        $validateData = $request->validate([
            'title' => 'required | min:5 | max:255',
            'image_url' => 'nullable | image | max:550 ',
            'paragraph' => 'required',
            'category_id' => 'nullable | exists:categories,id'
        ]);

        // validate data
        $file_path = Storage::put('blog_images', $validateData['image_url']);
            //ddd($file_path);
        $validateData['image_url'] = $file_path;
        //creare risorsa
        Blog::create($validateData);

        //return redirect
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validateData = $request->validate([
            'title' => 'required | min:5 | max:255',
            'image_url' => 'nullable | image | max:200',
            'paragraph' => 'required'
        ]);

        if (array_key_exists('image_url', $validateData)) {
            $file_path = Storage::put('blog_images', $validateData['image_url']);
            //ddd($file_path);
            
            $validateData['image_url'] = $file_path;
        }

        $blog->update($validateData);
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index');
    }
}
