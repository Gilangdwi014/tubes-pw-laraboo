@extends('layouts.main')

@section('container')
    <h1>Detail Masakan</h1>
    <div class="row">
      <div class="col-lg-6">
        <img src="https://source.unsplash.com/421x421?food" class="fotodetailmakanan" alt="">
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Bahan-Bahan</a>
            <p>
              <ol>
                <li>Air 18 ml</li>
                <li>tepung terigu 15 ml</li>
                <li>Gula 10ml</li>
                <li>baking powder</li>
                <li>mentega</li>
                <li>Telur 3 butir</li>
              </ol>
            </p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cara Pembuatan</a>
          </li>
        </ul>
      </div>
    </div>
@endsection