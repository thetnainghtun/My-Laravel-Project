<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function main($value='')
	{
        //$posts = Post::paginate(2);
        //dd($posts);

        $posts = Post::orderBy('id', 'desc')->paginate(5);
		// $posts=Post::all();
        $categories = Category::all();
        
    	return view('frontend.main',compact('posts','categories'));
	}

	public function newPost($value='')
    {
        $categories = Category::all();
        
        return view('frontend.newpost',compact('categories'));
        // return view('frontend.newpost');
    }

    public function register($value='')
    {
    	return view('frontend.register');
    }

    public function detailPost($id)
    {   
        // dd($id);
        $post=Post::find($id);
        return view('frontend.detailpost',compact('post'));
       // return view('frontend.detailpost');
    }


   /* public function category_data(Request $request)
    {   
        $id = $request->id;
        $posts = Post::where('category_id',$id)->with('category')->get();
        return $posts;
        // $post=Post::find($id);
        // return view('frontend.detailpost',compact('post'));
       // return view('frontend.detailpost');
    }*/

    public function categoryfilter($id)
       {
        //dd($id);
           $post=Post::where('category_id',$id);
          //dd($post);
           $categories=Category::all();
           $categoryfilter=Category::find($id);
           $id=$categoryfilter->id;
           $categoryfilters=Post::where('category_id','=',$id)->get();
      //  dd($categoryfilters);
           return view('frontend.categoryfilter',compact('categoryfilters','categories','post'));

    }
}
