@extends('layouts.main')


@section('container')
<h1 class="mb-5">Categories</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="#">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?food" class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-end p-0">
                        <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.7 );">Menu Utama</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?drink" class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-end p-0">
                        <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.7 );">Minuman</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?dessert" class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-end p-0">
                        <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.7 );">Makanan Penutup</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
