<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    $topstories = Post::take(3)->whereNull('vedio')->where('status', 1)->with('user','category')->get()->sortDesc();
    $vedios = Post::take(5)->whereNotNull('vedio')->where('status', 1)->with('user','category')->get()->sortDesc();
    return view('index', compact('topstories','vedios'));
   }

   public function show($slug){
      $post = Post::where('slug', $slug)->with('user','category')->first();
      $topstories = Post::take(4)->whereNull('vedio')->where('status', 1)->with('user','category')->get()->sortDesc();
      $vedios = Post::take(5)->whereNotNull('vedio')->where('status', 1)->with('user','category')->get()->sortDesc();
      $catId = $post->category ? $post->category->id : "";
      $relatedPost = Post::take(4)->where('category_id', $catId)->where('slug','!=',$slug)->with('user','category')->get()->sortDesc();
      // dd($relatedPost);
      return view('singlepage', compact('post','relatedPost','vedios','topstories'));
   }
}
