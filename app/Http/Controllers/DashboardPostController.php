<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::latest()->where('user_id', auth()->user()->id)->paginate(6)->withQueryString(),
            "active" => "home"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            "active" => "home",
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'category_id' => 'required',
            'nama_masakan' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024',
            'bahan_makanan' => 'required',
            'cara_pembuatan' => 'required'
        ]);

        if ($request->file('image')) {
            $ValidatedData['image'] = $request->file('image')->store('post-images');
        }

        $ValidatedData['user_id'] = auth()->user()->id;

        Post::create($ValidatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'active' => 'home',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            "active" => "home",
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'category_id' => 'required',
            'nama_masakan' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024',
            'bahan_makanan' => 'required',
            'cara_pembuatan' => 'required'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $ValidatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $ValidatedData['image'] = $request->file('image')->store('post-images');
        }

        $ValidatedData['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)
            ->update($ValidatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->nama_masakan);
        return response()->json(['slug' => $slug]);
    }
    public function profile(User $user)
    {
        return view('dashboard.posts.profile', [
            "active" => "home",
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'foto' => 'image|file|max:1024',
        ];

        $ValidatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $ValidatedData['foto'] = $request->file('foto')->store('post-images');
        }

        $ValidatedData['id'] = auth()->user()->id;

        User::where('id', $user->id)
            ->update($ValidatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }
}
