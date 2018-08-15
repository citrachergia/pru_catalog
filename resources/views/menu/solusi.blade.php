<!DOCTYPE html>
<html>

@extends('layout.header-view')

<head>
  <meta charset="UTF-8">
  <title>Solusi</title>
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
  <header id="top" class="solusi content-solusi">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="title"><b>SOLUSI</b></h1>
          <p>Perlindungan komprehensif yang disiapkan untuk kebutuhan Anda di setiap fase kehidupan</p>
          <a class="btn td-btn outline white scroll mt-30" href="#content" title="Learn more about me!">Lihat</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Content -->
  <div id="content" class="container-fluid text-center">
    <section id="content" class="row bg-white bg-shadow text-mg">
      <div class="row mt-30 mb-60">
        <div class="col-md-3 col-md-offset-2 mg-responsive">
          <img class="img-responsive center-block mb-30 img-cube" src="{{ URL::asset('img/pendidikan.jpg') }}" alt="Pendidikan">
        </div>
        <div class="col-md-7 col-md-offset-0 col-lg-5 text-justify">
          <h4><b>Pendidikan</b></h4>
          <p>Siapkan pendidikan buah hati Anda dan bersiaplah untuk mengamankan kebutuhan dan perlindungan pendidikan anak-anak Anda</p>
          <a class="btn td-btn outline green scroll mb-30" href="/pendidikan"> Lihat Selengkapnya </a>
        </div>
      </div>
      <div class="row mt-30 mb-60">
        <div class="col-sm-offset-2 col-md-7 col-md-offset-2 col-lg-5 text-justify mg-responsive">
          <h4><b>Kondisi Kritis</b></h4>
          <p>Dukungan finansial Anda ketika kondisi kritis melanda</p>
          <a class="btn td-btn outline green scroll mb-30" href="/kondisi-kritis"> Lihat Selengkapnya </a>
        </div>
        <div class="col-md-3 col-md-offset-0">
          <img class="img-cube img-responsive center-block mb-30" src="{{ URL::asset('img/kritis.jpg') }}" alt="Kondisi Kritis">
        </div>
      </div>
      <div class="row mt-30 mb-60">
        <div class="col-md-3 col-md-offset-2 mg-responsive">
          <img class="img-responsive center-block mb-30 img-cube" src="{{ URL::asset('img/kesehatan.jpg') }}" alt="Kesehatan">
        </div>
        <div class="col-md-7 col-md-offset-0 col-lg-5 text-justify">
          <h4><b>Kesehatan</b></h4>
          <p>Perlindungan kesehatan untuk Anda dan keluarga.</p>
          <a class="btn td-btn outline green scroll mb-30" href="/kesehatan"> Lihat Selengkapnya </a>
        </div>
      </div>
      <div class="row mt-30 mb-60">
        <div class="col-sm-offset-2 col-md-7 col-md-offset-2 col-lg-5 text-justify mg-responsive">
          <h4><b>Proteksi</b></h4>
          <p>Rencana perlindungan yang kami rancang untuk melindungi Anda dan orang yang Anda cintai dari ketidakpastian.</p>
          <a class="btn td-btn outline green scroll mb-30" href="/proteksi"> Lihat Selengkapnya </a>
        </div>
        <div class="col-md-3 col-md-offset-0">
          <img class="img-cube img-responsive center-block mb-30" src="{{ URL::asset('img/proteksi.jpg') }}" alt="Proteksi">
        </div>
      </div>
      <div class="row mt-30 mb-60">
        <div class="col-md-3 col-md-offset-2 mg-responsive">
          <img class="img-responsive center-block mb-30 img-cube" src="{{ URL::asset('img/investasi.jpg') }}" alt="Investasi">
        </div>
        <div class="col-md-7 col-md-offset-0 col-lg-5 text-justify">
          <h4><b>Investasi</b></h4>
          <p>Solusi investasi yang dirancang untuk meningkatkan kesejahteraan Anda</p>
          <a class="btn td-btn outline green scroll mb-30" href="/investasi"> Lihat Selengkapnya </a>
        </div>
      </div>
    </section>

    <!-- Komentar Section -->
    @include('layout.comment')
    
    <!-- Footer -->
    @include('layout.footer')
  </div>
</body>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="{{ URL::asset('js/index.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</html>
