<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use App\Models\Feedback;

class PostController extends Controller
{
    public function index()
    {
        $title = "";
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            // $title = ' in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            // $title = ' by ' . $user->name;
        }

        return view('menu', [
            "title" => "All Posts",
            "active" => "home",
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(6)->withQueryString(),
            "likes" => Like::all()
        ]);
    }

    public function show(Post $post)
    {
        $feedback = Feedback::all();
        return view('detmenu', [
            "title" => "Single Post",
            "active" => "home",
            'feedback' => $feedback,
            "post" => $post
        ]);
    }

    public function insertFeedback(Request $request)
    {
        $request->request->add(['user_id' => auth()->user()->id]);
        $feedback = Feedback::create($request->all());
        return redirect()->back()->with('success', 'add comment');
        // dd($request->all());
    }
}
