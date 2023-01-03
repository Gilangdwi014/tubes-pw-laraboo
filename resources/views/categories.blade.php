@extends('layouts.main')


@section('container')
    <h1 class="mb-5">Categories</h1>
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <a href="/?category=menu-utama">
                    <div class="card text-bg-dark">
                        <img src="https://www.themealdb.com/images/media/meals/1529444113.jpg" class="card-img"
                            alt="Menu Utama">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <h5 class="card-title text-center flex-fill p-3 fs-3"
                                style="background-color: rgba(0, 0, 0, 0.7)">
                                Menu Utama
                            </h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/?category=minuman">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/500x500?beverage" class="card-img" alt="Minuman">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <h5 class="card-title text-center flex-fill p-3 fs-3"
                                style="background-color: rgba(0, 0, 0, 0.7)">
                                Minuman
                            </h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/?category=makanan-penutup">
                    <div class="card text-bg-dark">
                        <img src="https://www.themealdb.com/images/media/meals/xqrwyr1511133646.jpg" class="card-img"
                            alt="Makanan Penutup">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <h5 class="card-title text-center flex-fill p-3 fs-3"
                                style="background-color: rgba(0, 0, 0, 0.7)">
                                Makanan Penutup
                            </h5>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <div class="pb-5"></div>
@endsection
