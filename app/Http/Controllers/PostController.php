<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use function Pest\Laravel\post;

class PostController extends Controller
{
    public function index()
    {   
        $posts = Post::orderBy('id')->paginate(5);
       
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($post)
    {
        $post = Post::find($post);
         

        return view('posts.show', compact('post'));
    }

    public function store(StorePostRequest $request)
    {
        // $request->validate([
        //     'title' => ['required', 'string', 'max:255'],
        //     'content' => 'required',
        //     'category' => 'required',
        // ]); 

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit($post)
    {
        $post = Post::find($post);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request,  $post)
    {
        $post = Post::find($post);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();

        return redirect('/posts/'.$post->id);
    }

}
