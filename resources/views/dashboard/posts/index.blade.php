@extends('layouts.main')
@section('container')
<div class="card cardUser">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 position-relative">
            <img src="{{ asset('storage/' . auth()->user()->foto) }}" class="gambarProfile img-tumbnail rounded-circle position-relative top-50 start-50 translate-middle" alt="{{ auth()->user()->username }}">
            </div>

            <div class="col-lg-4 pt-5">
                <h5 class="card-title">{{ auth()->user()->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ auth()->user()->email }}</h6>
            </div>

            <div class="col-lg-5 d-flex flex-row-reverse">
                <div class="dropstart">
                    <a href="" class="buttonDots mb-auto" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard/profile/{{ auth()->user()->username }}/edit">Edit Profile</a></li>
                        @can('admin')<li><a class="dropdown-item" href="/dashboard/posts/create">Tambah Resep</a></li>@endcan
                    </ul>
                </div>
                {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-auto"><i class="bi bi-plus"></i> Tambah Resep</a> --}}
            </div>
        </div>
    </div>
</div>

@if (session()->has('success'))
<div class="mt-5 alert alert-success col-lg-3" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="pt-5"></div>
@if ($posts->count())
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a href="/?category={{ $post->category->slug }}" class="text-white text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </div>
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid gambarCard">
                @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->nama_masakan }}</h5>
                    <p>
                        <small class="text-muted">
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <div class="d-flex justify-content-around">
                        <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-success"><i class="bi bi-newspaper">
                                Detail</i></a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"> Edit</i></a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="bi bi-trash"> Delete</i>
                            </button>
                        </form>
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

@endsection
