@extends('layouts.main')
@section('container')
    <h1>{{ $post->nama_masakan }}</h1>
    <p>
        By.
        <a href="/?author={{ $post->user->username }}" class="text-decoration-none">
            {{ $post->user->name }}
        </a>
        in
        <a href="/?category={{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name }}
        </a>
    </p>

    <div class="mb-3">
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
            Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>
                Delete</button>
        </form>
    </div>

    <div class="row">
        <div class="col-lg-6">
            @if ($post->image)
                <div style="max-height: 350px; overflow: hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid">
            @endif
        </div>
        <div class="col-lg-6">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="true">Bahan-bahan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Cara
                        Pembuatan</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <p>
                    <article class="my-3 fs-5">
                        {!! $post->bahan_makanan !!}
                    </article>
                    </p>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <p>
                    <article class="my-3 fs-5">
                        {!! $post->cara_pembuatan !!}
                    </article>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
