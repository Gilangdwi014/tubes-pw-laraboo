<?php use Illuminate\Support\Facades\Blade; ?>

@extends('layouts.main')
@section('container')
    <div class="row justify-content-center mb-3">

        <div class="col-md-6">
            <form action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn" style="background: #D0F0C0" type="submit">Search</button>
                </div>
            </form>
        </div>

        <div class="card mb-3 px-0">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="10000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://source.unsplash.com/1000x400?food" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="warnaText">Makanan Utama</h1>
                            <p class="warnaText fs-3">Makanan utama yang populer.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/1000x400?dessert" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="warnaText">Minuman</h1>
                            <p class="warnaText fs-3">minuman yang populer.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/1000x400?beverage" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="warnaText">Makanan Penutup</h1>
                            <p class="warnaText fs-3">Makanan penutup yang populer</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        @if ($posts->count())
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                    <a href="/?category={{ $post->category->slug }}"
                                        class="text-white text-decoration-none">
                                        {{ $post->category->name }}
                                    </a>
                                </div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="img-fluid gambarCard">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->nama_masakan }}</h5>
                                    <p>
                                        <small class="text-muted">
                                            By.
                                            <a href="/?user={{ $post->user->username }}" class="text-decoration-none">
                                                {{ $post->user->name }}
                                            </a>
                                            {{ $post->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="/menu/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                                        @if (DB::table('likes')->where('post_id', '=', $post->id)->where('user_id', '=', Auth::id())->first())
                                            <div class="bookmarked">
                                                <span class="card-link text-decoration-none border-0 bg-white">
                                                    <i class="bi bi-bookmark-plus"></i>
                                                    Dibookmark
                                                </span>
                                            </div>
                                        @else
                                            <form action="/bookmark/{{ $post->slug }}" method="POST">
                                                @csrf
                                                <button
                                                    class="card-link text-decoration-none border-0 bg-white text-primary">
                                                    <i class="bi bi-bookmark-plus"></i>
                                                    Bookmark
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-4">No post found.</p>
        @endif

        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
