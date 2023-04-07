<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blog = Blog::with('user')->get();
        return view('admin.blog.index',compact('blog'));
    }

    public function changeStatus(Request $request)
    {
        dd("Dfsf");
        return "helo";
    }
}
