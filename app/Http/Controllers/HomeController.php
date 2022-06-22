<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    $topstories = Post::take(3)->get();
    $vedios = Post::take(5)->whereNotNull('vedio')->get();
    return view('index', compact('topstories','vedios'));
   }
}
