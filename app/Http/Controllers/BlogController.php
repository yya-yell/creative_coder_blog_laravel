<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index()
    {
        return view('Blogs.index', [
            'blogs' => Blog::latest()->filter(request(['search' , 'category' , 'author']))->paginate(6)->withQueryString(),
        ]);
    }


    public function show(Blog $blog)
    {
        return view('Blogs.show', [
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get(),
        ]);
    }

    public function subscribtion(Blog $blog)
    {
        if(User::find(auth()->user()->id)->isSubscribed($blog)){
             $blog->unSubscribe();
        }else{
             $blog->subscribe();
        }
        return back();
    }

    public function create()
    {
        return view('Blogs.create' , [
            'categories' => category::all()
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'title' => ['required'],
            'intro' => ['required'],
            'body' => ['required'],
            'thumbnail' => ['required'],
            'category_id' => ['required' , Rule::exists('categories' , 'id')],
        ]);
        $data['slug'] = Str::slug(request()->title);
        $data['user_id'] = auth()->id();
        $data['thumbnail'] = request('thumbnail')->store('thumbnails');
        Blog::create($data);
        return redirect('/');
    }
}
