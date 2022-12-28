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
    <div class="row">
        <div class="col-lg-6">
            @if ($post->image)
                <div style="max-height: 350px; overflow: hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid">
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
    <br><br><br><br><br><br>
    <div class="col-lg-8">
        <h5>Kolom Feedback</h5>
        <form action="" method="post">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input id="isiFeedback" type="hidden" name="feedback_isi">
            <trix-editor input="isiFeedback"></trix-editor>
            <br>
            <div style="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
        <div class="col-lg-8">
            @foreach ($post->feedback()->orderBy('created_at', 'desc')->get() as $feedback)
            <h5>{{ $feedback->user->name }}</h5>
            <small class="text-muted">{{ $feedback->created_at->diffForHumans() }}</small>
            {!! $feedback->feedback_isi !!}
            <br>
            @endforeach
        </div>
    </div>
@endsection
