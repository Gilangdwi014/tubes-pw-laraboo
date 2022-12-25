@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>

    <div class="row">
        <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5  d-flex justify-content-between"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="col-lg-6">
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5"
                        style="width: 500px; min-height: 400px;">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5" style="width: 500px; min-height: 400px;">
                @endif
            </div>

            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id', $post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_masakan" class="form-label">Nama_masakan</label>
                    <input type="text" class="form-control @error('nama_masakan') is-invalid @enderror" id="nama_masakan"
                        name="nama_masakan" required autofocus value="{{ old('nama_masakan', $post->nama_masakan) }}">
                    @error('nama_masakan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        name="slug" required value="{{ old('slug', $post->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bahan_makanan" class="form-label">Bahan Bahan</label>
                    @error('bahan_makanan')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="bahan_makanan" type="hidden" name="bahan_makanan"
                        value="{{ old('bahan_makanan', $post->bahan_makanan) }}">
                    <trix-editor input="bahan_makanan"></trix-editor>
                </div>
                <div class="mb-3">
                    <label for="cara_pembuatan" class="form-label">Cara Pembuatan</label>
                    @error('cara_pembuatan')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="cara_pembuatan" type="hidden" name="cara_pembuatan"
                        value="{{ old('cara_pembuatan', $post->cara_pembuatan) }}">
                    <trix-editor input="cara_pembuatan"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary">Update Post</button>
            </div>
        </form>
    </div>

    <script>
        const nama_masakan = document.querySelector('#nama_masakan');
        const slug = document.querySelector('#slug');
        nama_masakan.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?nama_masakan=' + nama_masakan.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
