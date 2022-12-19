@extends('layouts.main')
@section('container')
    <div class="card cardUser">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 position-relative">
                    <img src="https://source.unsplash.com/421x421?nature" width="200"
                        class="img-tumbnail rounded-circle position-relative top-50 start-50 translate-middle" alt="">
                </div>

                <div class="col-lg-4 pt-5">
                    <h5 class="card-title">Dean T</h5>
                    <h6 class="card-subtitle mb-2 text-muted">dean@gmail.com</h6>
                </div>

                <div class="col-lg-5 d-flex flex-row-reverse">
                    <a href="/dashboard/posts/create" class="btn btn-primary mt-auto"><i class="bi bi-plus"></i> Tambah
                        Resep</a>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5"></div>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
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
                        <center>
                            <a href="#" class="btn btn-success"><i class="bi bi-newspaper"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
