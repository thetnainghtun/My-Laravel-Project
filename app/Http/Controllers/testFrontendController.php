<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class FrontendController extends Controller
{
    public function main($value='')
    {   
        $posts=Post::all();
        $categories = Category::all();
        
    	return view('frontend.main',compact('posts','categories'));
    }

    public function register($value='')
    {
    	return view('frontend.register');
    }

    public function showCategory($value='')
    {	
    	$categories = Category::all();
     	return view('frontend.main',compact('categories'));
    }

    public function newPost($value='')
    {
        $categories = Category::all();
        
        return view('frontend.newpost',compact('categories'));
        // return view('frontend.newpost');
    }

    public function detailPost($id)
    {   
        $post=Post::find($id);
        return view('frontend.detailpost',compact('post'));
    }
}
