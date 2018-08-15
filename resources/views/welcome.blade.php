<!DOCTYPE html>
<html>

@extends('layout.header')

<head>
  <meta charset="UTF-8">
  <title>Prudential Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}">
  <link rel='stylesheet' href="{{ URL::asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel='stylesheet' href="{{ URL::asset('css/fonts.min.css') }}">
  <link rel='stylesheet' href="{{ URL::asset('css/font-awesome.min.css') }}">
</head>

<body data-spy="scroll" data-target="#main-nav" data-offset="60">

  <!-- Header -->
  <header id="top" class="jumbotron">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
          <img class="img-responsive center-block logo" src="{{ URL::asset('img/logo.png') }}" alt="PRU Logo">
        </div>
        <div class="col-xs-12">
          <h1 class="title">PRUDENTIAL</h1>
          <p>Always Listening. Always Understanding.</p>
          <a class="btn td-btn outline green scroll mt-30" href="#content" title="Learn more about me!">Pelajari lebih lanjut</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Tentang Section -->
  <div id="content" class="container-fluid text-center">
    <section id="tentang" class="row bg-white bg-shadow">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="mb-30">Tentang</h1>
        </div>
      </div>
      <div class="row mb-30">
        <div class="col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
          <img class="img-responsive center-block profile mb-30" src="{{ URL::asset('img/group_pru.jpg') }}" alt="PRU Group">
        </div>
        <div class="col-sm-offset-2 col-md-5 col-md-offset-0 col-lg-4 text-justify">
          <h4>Selamat Datang di Prudential Indonesia!</h4>
          <p>Prudential Indonesia didirikan pada tahun 1995. Prudential Indonesia merupakan bagian dari Prudential plc, London, Inggris. Di Asia, Prudential Indonesia menginduk pada kantor regional Prudential Corporation Asia (PCA), yang berkedudukan di Hong Kong. Prudential Indonesia sebagai perusahaan di bidang jasa keuangan telah terdaftar dan diawasi oleh Otoritas Jasa Keuangan (OJK). Lembaga ini dibentuk dengan tujuan agar keseluruhan kegiatan jasa keuangan di dalam sektor jasa keuangan terselenggara secara teratur, adil, transparan, dan akuntabel, serta mewujudkan sistem keuangan yang tumbuh secara berkelanjutan dan stabil mampu melindungi kepentingan konsumen dan masyarakat (Pasal 4 UU OJK).</p>
        </div>
      </div>
    </section>


    <!-- PSolusi Section -->
    <section id="solusi" class="row bg-star-y">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="text-redpru">Solusi</h1>
        </div>
      </div>
      <div class="row">
        <div id="projects" class="carousel slide col-xs-12" data-ride="carousel" data-interval="false">
          <div class="row">
            <div class="col-xs-1">
              <a class="left carousel-control" href="#projects" role="button" data-slide="prev">
                <span class="p_pru" aria-hidden="true"><</span>
                <span class="sr-only">Previous</span>
              </a>
            </div>
            <div class="col-xs-10">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <ul class="card-list">
                    <li class="card">
                      <a href="/pendidikan" class="card-image" style="background-image: url('../img/pendidikan.jpg');" data-image-full="{{ URL::asset('img/pendidikan.jpg') }}">
                        <img src="{{ URL::asset('img/pendidikan.jpg') }}">
                      </a>
                      <a class="card-description p_pru">
                        <h4>Pendidikan</h4>
                        <p>Siapkan pendidikan buah hati tercinta Anda</p>
                      </a>
                    </li>
                    <li class="card">
                      <a href="/kondisi-kritis" class="card-image" style="background-image: url('../img/kritis.jpg');" data-image-full="{{ URL::asset('img/kritis.jpg') }}">
                        <img src="{{ URL::asset('img/kritis.jpg') }}">
                      </a>
                      <a class="card-description p_pru">
                        <h4>Kondisi Kritis</h4>
                        <p>Dukungan finansial Anda ketika kondisi kritis melanda</p>
                      </a>
                    </li>
                    <li class="card">
                      <a href="/kesehatan" class="card-image" style="background-image: url('../img/kesehatan.jpg');" data-image-full="{{ URL::asset('img/kesehatan.jpg') }}">
                        <img src="{{ URL::asset('img/kesehatan.jpg') }}">
                      </a>
                      <a class="card-description p_pru">
                        <h4>Kesehatan</h4>
                        <p>Perlindungan kesehatan untuk Anda dan keluarga</p>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul class="card-list">
                    <li class="card">
                      <a href="/proteksi" class="card-image" style="background-image: url('../img/proteksi.jpg');" data-image-full="{{ URL::asset('img/proteksi.jpg') }}">
                        <img src="{{ URL::asset('img/proteksi.jpg') }}">
                      </a>
                      <a class="card-description p_pru">
                        <h4>Proteksi</h4>
                        <p>Rencana perlindungan untuk Anda dan orang yang Anda cintai</p>
                      </a>
                    </li>
                    <li class="card">
                      <a href="/investasi" class="card-image" style="background-image: url('../img/investasi.jpg');" data-image-full="{{ URL::asset('img/investasi.jpg') }}">
                        <img src="{{ URL::asset('img/investasi.jpg') }}">
                      </a>
                      <a class="card-description p_pru">
                        <h4>Investasi</h4>
                        <p>Solusi investasi yang dirancang untuk kesejahteraan Anda</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-1">
              <a class="right carousel-control" href="#projects" role="button" data-slide="next">
                <span class="p_pru" aria-hidden="true">></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="col-xs-12 mt-60">
              <ol class="carousel-indicators mt-30">
                <li data-target="#projects" data-slide-to="0" class="active"></li>
                <li data-target="#projects" data-slide-to="1"></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Layanan Section -->
    <section class="row bg-pink bg-shadow" id="layanan">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="mb-30 mt-30">Layanan Kami</h1>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-sm-3 col-lg-2 col-lg-offset-3 text-center">
          <img class="img-responsive center-block icon" src="{{ URL::asset('img/icon/heart.png') }}" alt="Kesehatan">
          <p class="mb-60">Rumah Sakit</p>
          <img class="img-responsive center-block icon" src="{{ URL::asset('img/icon/dress.png') }}" alt="PRUboutiques">
          <p class="mb-60">PRUboutiques</p>
        </div>
        <div class="col-sm-3 col-lg-2 text-center">
          <img class="img-responsive center-block icon" src="{{ URL::asset('img/icon/claim.png') }}" alt="Klaim">
          <p class="mb-60">Layanan Klaim</p>
          <img class="img-responsive center-block icon" src="{{ URL::asset('img/icon/wallet.png') }}" alt="Jasa_Transaksi">
          <p class="mb-60">Informasi Jasa & Transaksi</p>
        </div>
        <div class="col-sm-3 col-lg-2 text-center">
          <img class="img-responsive center-block icon" src="{{ URL::asset('img/icon/badge.png') }}" alt="PRUflayers">
          <p class="mb-60">PRUflayers</p>
          <img class="img-responsive center-block icon" src="{{ URL::asset('img/icon/support.png') }}" alt="Nasabah">
          <p class="mb-60">Informasi Nasabah</p>
        </div>
      </div>
    </section>

   @include('layout.footer')

  </div>
</body>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="{{ URL::asset('js/index.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</html>
