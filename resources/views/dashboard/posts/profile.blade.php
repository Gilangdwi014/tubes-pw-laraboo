@extends('layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Profile</h1>
  </div>
  <div class="row">
      <form action="/dashboard/profile/{{ $user->username }}" method="POST" class="mb-5  d-flex justify-content-between" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-lg-6">
          <center><img src="{{ asset('storage/' . $user->foto) }}" class="img-preview" alt="" style="width: 300px; min-height: 200px;border-radius: 5px"></center>
        </div>
        <div class="col-lg-6">
          <div class="mb-3">
            <label class="form-label" for="">Full Name</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name', $user->name) }}">
              @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Foto Profile</label>
            <input class="form-control @error('foto') is-invalid @enderror" name="foto" type="file" id="image" onchange="previewImage()">
            @error('foto')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <button class="btn btn-success" type="submit">Update Profile</button>
        </div>
      </form>
  </div>
  <script>
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