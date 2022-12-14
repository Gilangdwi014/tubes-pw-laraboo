@extends('layouts.main')

@section('container')
    <h1>Detail Masakan</h1>
    <div class="row">
      <div class="col-lg-6">
        <img src="https://source.unsplash.com/421x421?food" class="fotodetailmakanan" alt="">
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Bahan-bahan</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Cara Pembuatan</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
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
          </div>
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <p>
              <ul>
                <li>Pertama Campurkan Tepung dengan Air kedalam wadah adonan</li>
                <li>Kemudian Campurkan Masukan Mentega Cair sebanyak 500ml</li>
                <li>Kemudian Masukan Telur dan gula</li>
                <li>Kemudian Aduk hingga adonan tercampur merata</li>
                <li>Setelah selesai Masukan adonan kedalam oven selama 10 menit</li>
                <li>Setelah matang kemudian pindahkan dari cetakan kue ke piring saji</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection