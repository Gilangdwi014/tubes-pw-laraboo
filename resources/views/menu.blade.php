@extends('layouts.main')
@section('container')

<div class="row justify-content-center mb-3">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="1000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1000x400?food" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1000x400?dessert" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1000x400?beverage" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?food" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?food" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?food" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body clearfix">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?beverage" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?beverage" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?beverage" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body clearfix">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?dessert" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?dessert" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400?dessert" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">@namaPembuat</h5>
          <p class="card-text text-center">Deskripsi (optional/diluar rencana)</p>
        </div>
        <div class="card-body clearfix">
          <a href="#" class="card-link text-decoration-none"><i class="bi bi-bookmark-plus"></i> Bookmark</a>
          <a href="#" style="color: black" class="card-link text-decoration-none float-end"><i class="bi bi-heart" style="color: red"></i> 4321</a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection