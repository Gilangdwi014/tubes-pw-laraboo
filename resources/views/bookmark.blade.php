@extends('layouts.main')
@section('container')
<div class="row justify-content-center mb-3">
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
                                By.
                                <a href="/?user={{ $post->user->username }}" class="text-decoration-none">
                                    {{ $post->user->name }}
                                </a>
                                {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="/menu/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            <form action="/bookmark/{{ $post->slug }}/hapus" method="POST">
                                @csrf
                                <button class="card-link text-decoration-none border-0 bg-white text-primary">
                                    <i class="bi bi-bookmark-plus"></i>
                                    Hapus Bookmark
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
    @else
    <p class="text-center fs-4">No post found.</p>
    <div style="padding-bottom: 317px"></div>
</div>
    @endif

    {{-- <div class="d-flex justify-content-end">
            {{ $posts->links() }}
</div> --}}

@endsection
