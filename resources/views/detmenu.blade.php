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
            <div>
                <img src="https://source.unsplash.com/500x400?food" style="max-height: 500px; border-radius: 5px" class="img-fluid">
            </div>
            {{-- @if ($post->image)
                <div style="max-height: 350px; overflow: hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid">
            @endif --}}
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
            <h5>Kolom Komentar</h5>
            {{-- table komentar di database --}}
            <form action="" method="post">
                <input type="hidden" name="idpostingan"> {{-- tabel postingan --}}
                <input type="hidden" name="namauser"> {{-- table user/table posingan ->userid->Getnama --}}
                <input id="isiKomentar" type="hidden" name="isiKomentar"> {{-- murni dari table komentar --}}
                <trix-editor></trix-editor>
                <br>
                <div style="padding-left: 89%">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <br>
            <div class="col-lg-8">
                <h5>Gilang</h5>
                <small class="text-muted">30 minutes ago</small>
                <br>
                <p>Test Komentar di postingan Ini</p>

                <h5>Dean T</h5>
                <small class="text-muted">30 minutes ago</small>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, perferendis modi. Sapiente atque, aut molestiae ea eaque nemo voluptate facilis! Alias labore doloribus autem sunt sit modi eligendi voluptatum facilis.</p>

                <h5>Sulis</h5>
                <small class="text-muted">30 minutes ago</small>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, perferendis modi. Sapiente atque, aut molestiae ea eaque nemo voluptate facilis! Alias labore doloribus autem sunt sit modi eligendi voluptatum facilis.</p>
            </div>
        </div>
@endsection
