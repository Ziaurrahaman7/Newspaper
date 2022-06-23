<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return  view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = Auth::id();
        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'user_id' => 'required',
            'category_id' => 'required',
            'feather_image' => 'image|required|max:3000',
            'vedio' => 'nullable|string',
            'description' => 'required',
            'status' => 'required',
            'seo_title' => 'string|nullable',
            'seo_keyword' => 'string|nullable',
            'seo_description' => 'string|nullable',
        ]);

        // $data['slug']= Str::slug($request['title']);
        $file = $request->file('feather_image');
        // dd($file);
        $name = $file->hashName();
        request()->file('feather_image')->store('public/uploads');
        $data['feather_image'] = $name;
        Post::create($data);
        return redirect('admin/post')->with('success', 'successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request['user_id'] = Auth::id();
        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'feather_image' => 'image|max:3000',
            'vedio' => 'nullable|string',
            'description' => 'required',
            'status' => 'required',
            'seo_title' => 'string|nullable',
            'seo_keyword' => 'string|nullable',
            'seo_description' => 'string|nullable',
        ]);

        // $data['slug']= Str::slug($request['title']);
        if (isset($attributes['feather_image'])) {
            $file = $request->file('feather_image');
            $name = $file->hashName();
            request()->file('feather_image')->store('public/uploads');
            $data['feather_image'] = $name;
        }
        $post->update($data);
        return redirect('admin/post')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('admin/post')->with('success', 'successfully delete');
    }
}
