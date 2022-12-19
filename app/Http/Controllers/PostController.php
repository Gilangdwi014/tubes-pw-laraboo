<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = "";
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }

        return view('menu', [
            "title" => "All Posts" . $title,
            "active" => "home",
            "posts" => Post::latest()->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('detmenu', [
            "title" => "Single Post",
            "active" => "home",
            "post" => $post
        ]);
    }
}
