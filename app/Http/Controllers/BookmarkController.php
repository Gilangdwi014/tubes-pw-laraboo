<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use App\Models\User;

class BookmarkController extends Controller
{
    public function index()
    {
        return view('bookmark', [
            'title' => 'Bookmark',
            'active' => 'home',
            "posts" => Post::join('likes', 'posts.id', '=', 'likes.post_id')
                ->join('users', 'likes.user_id', '=', 'users.id')
                ->where('users.id', '=', auth()->user()->id)
                ->get()
        ]);
    }

    public function liker(Post $post)
    {
        $user = auth()->user();
        $user->votedPosts()->attach($post->id);
        return redirect('/');
    }

    public function disliker(Post $post)
    {
        $user = auth()->user();
        $user->votedPosts()->detach($post->id);
        return redirect('/bookmark');
    }
}
