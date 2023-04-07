<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogData = Blog::all();
        return view('front.blog.index',compact('blogData'));
    }
    
    public function create()
    {
        return view('front.blog.create');
    }

    public function store(Request $request)
    {
        if(!Auth::check()){
            return response()->json(['ResponseCode'=>0,'ResponseText'=>'After login You can Create Blog.'],200);
        }else{
            $request->validate([
                'title'=>'required',
                'image'=>'required',
                'description'=>'required',
            ]);
            $blogData = new Blog();
            $blogData->userId = Auth::user()->id;
            $blogData->title = $request->title;
            $blogData->description = $request->description;
            if($request->image){
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $image->storeAs('public/adminAssets/uploads/blog',$name);
                $blogData->image = $name;
            }
            $blogData->status = 0;
            if($blogData->save()){
                return response()->json(['ResponseCode'=>1,'ResponseText'=>'Blog Added SuccessFully'],200);
            }else{
                return response()->json(['ResponseCode'=>0,'ResponseText'=>'Sumthing Went Wrong'],403);
            }
        }
    }

    public function singleBlog($id)
    {
        $blog = Blog::with('user')->where('id',$id)->first();
        return view('front.blog.singleBlog',compact('blog'));
    }
}
