<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class BlogController extends Controller
{
    // blog index function
    
public function welcome(){
    return view('welcome');
}

public function index(){
    return view('blogPost.blog');
}
public function showsingleblog(){
    return view('blogPost.singleblog');
}

public function about(){
    return view('about');
}
public function create(){
    return view('blogPost.create-blog');
}
public function categories(){
    return view('categories');
}
public function categorylist(){
    return view('categorylist');
}

public function store(Request $request){
    // $allInputs = $request->all();
    // dd($allInputs);
    // $title = $request->input('title');
    // $image = $request->input('title');
    // dd($title);
    // dd($image);
    $request->validate([
        'title' => 'required',
    ]);
    $request->validate([
        'image' => 'required | image',
        'description' =>'required',
    ]);
    // $request->validate([
    //     'editor' => 'required',
    // ]);
    $title = $request->input('title');
    $slug=Str::slug($title,'-');
    $user_id=Auth::user()->id;
    $body = $request->input('body');
    //File Upload
   $imagePath= 'storage/'. $request->file('image')->store('postsImages','public');

   $post = new Post();
   $post->title = $title;
   $post->slug = $slug;
   $post->user_id = $user_id;
   $post->body = $body;
   $post->image = $imagePath;
   $post->save();
    // dd('Validation Success You Can Now Request The Input');
    // return redirect('blog');
    return redirect()->back()->with('status', 'successfully submitted');
}

// public function show(Post $post)
// {
//     $post->increment('views');
//     return view('posts.show', compact('post'));
// }

}
