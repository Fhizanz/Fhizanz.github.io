<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if(request('category'))
        {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author'))
        {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => " All Posts" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))
                       ->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        // $data = Post::where('title','LIKE','%' . $request->search . '%')
        //             ->orWhere('body', 'LIKE', '%' . $request->search . '%')
        //             ->orWhere('excerpt', 'LIKE', '%' . $request->search . '%')->get();

        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }

    public function lihat($slug)
    {
        $data = Post::where('slug','LIKE','%' . $slug . '%')->with('category')->first();

        return view('singlepost', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $data
        ]);
    }
}
