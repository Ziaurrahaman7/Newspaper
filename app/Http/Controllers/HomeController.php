<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
   public function index(){
      // $role = Role::create(['name' => 'admin']);
      // $permission = Permission::create(['name' => 'admin access']);
      // $role = User::find(1);
      // $role->givePermissionTo(["all access"]);
   //  $commentMax=  Comment::select(['post_id'])->withCount('comment')->with('post')->groupBy('post_id')->get();
   // $role = Role::create(['name' => 'admin']);
   // $permission = Permission::create(['name' => 'all access']);
   $commentMax= Comment::select(['post_id'])->with('post')->where('created_at', '>', \Carbon\Carbon::now()->subWeek())->groupBy('post_id')->take(6)->get();
   //  dd($commentMax);
    $topnews = Post::take(3)->whereNull('vedio')->where('status', 1)->with('user','category')->get()->sortDesc();
   //  dd($topstories);
    $vedios = Post::take(5)->whereNotNull('vedio')->where('status', 1)->with('user','category')->get()->sortDesc();
    return view('index', compact('topnews','vedios','commentMax'));
   }

   public function show($slug){
      $post = Post::where('slug', $slug)->with('user','category')->first();
      $catId = $post->category ? $post->category->id : "";
      $relatedPost = Post::take(4)->where('category_id', $catId)->where('slug','!=',$slug)->with('user','category')->get()->sortDesc();
      // dd($relatedPost);
      $postId = $post->id ? $post->id : "";
      // $comments = Comment::take(4)->where('post_id', $postId)->where('user_id', Auth::id())->orWhere('approved', 1)->with('user')->get()->sortDesc();
      $comments = Comment::where('post_id', $postId)->where(function ($q) {
         $q->where('user_id', Auth::id())->orWhere('approved', 1);
     })->orderBy('id', 'desc')->paginate(10);
      return view('singlepage', compact('post','relatedPost','comments',));
   }

   public function catbase($catId){
      $posts = Post::where('category_id', $catId)->with('user','category')->orderBy('id', 'desc')->paginate(10);
      $catname = Post::where('category_id', $catId)->with('user','category')->first();
      return view('category_base', compact('posts','catname'));
   }

   // public function leftsidebar(){
    
   //    return view('leftsidebar', compact('vedios','topstories',));
   // }

   public function profile($userId){
      $user = User::where('id', $userId)->first();
      return view('profile', compact('user'));
   }
}
