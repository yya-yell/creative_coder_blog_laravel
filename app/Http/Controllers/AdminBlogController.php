<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin/index' , [
            'blogs' => Blog::latest()->paginate(4)
        ]);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }

}
