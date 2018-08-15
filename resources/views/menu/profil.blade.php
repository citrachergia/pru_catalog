<!DOCTYPE html>
<html>

@extends('layout.header-view')

<head>
  <meta charset="UTF-8">
  <title>Profil Perusahaan</title>
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
  <header id="top" class="profil content-solusi">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12 h1-title">
          <h1><b>PROFIL PERUSAHAAN</b></h1>
          <p>Telah hadir selama 22 tahun melayani masyarakat Indonesia memiliki perlindungan yang tepat</p>
          <a class="btn td-btn outline green scroll mt-30" href="#content">Lihat</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Content -->
  <div id="content" class="container-fluid text-center">
    <section id="content" class="row bg-white bg-shadow text-mg">
      <div class="rowmb-30">
        <div class="col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 mt-60">
          <img class="img-responsive center-block profile mb-60" src="{{ URL::asset('img/pru_office.jpg') }}" alt="Office">
          <!-- <img class="img-responsive center-block profile mb-30" src="{{ URL::asset('img/group_pru.jpg') }}" alt="PRU Group"> -->
        </div>
        <div class="col-sm-offset-2 col-md-5 col-md-offset-0 col-lg-4 text-justify mt-30 mb-30">
          <h4>Prudential Indonesia</h4>
          <p>Didirikan pada tahun 1995, PT Prudential Life Assurance (Prudential Indonesia) merupakan bagian dari Prudential plc, sebuah grup perusahaan jasa keuangan terkemuka di Inggris. Sebagai bagian dari Grup yang berpengalaman lebih dari 168 tahun di industri asuransi jiwa, Prudential Indonesia memiliki komitmen untuk mengembangkan bisnisnya di Indonesia.Prudential Indonesia  memiliki izin usaha di bidang asuransi jiwa patungan berdasarkan Surat Keputusan Menteri Keuangan Indonesia Nomor: 241/KMK.017/1995 tanggal 1 Juni 1995 juncto Surat Menteri Keuangan Nomor: S.191/MK.6/2001 tanggal 6 Maret 2001 juncto Surat Menteri Keuangan Nomor S.614/MK.6/2001 tanggal 23 Oktober 2001 juncto Surat Menteri Keuangan Nomor S-9077/BL/2008 tanggal 19 Desember 2008.  Perusahaan juga memiliki izin usaha Unit Syariah berdasarkan surat Menteri Keuangan Nomor KEP 167/KM.10/2007 yang dikeluarkan pada tanggal 20 Agustus 2007.</p>
        </div>
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <hr class="dashed">
            <h2 class="mt-60 mb-30">Logo Kami</h2>
          </div>
          <div class="col-sm-10 col-sm-offset-1 text-justify">
            <p>Simbol utama serta asal mula nama Prudential diambil dari figur Dewi Prudence (Dewi Kebijaksanaan). Dewi Prudence merupakan ciri khas dan memiliki keterkaitan yang kuat dengan Prudential sejak pendiriannya pada tahun 1848. Sosok ini mewakili salah satu dari empat kebajikan utama dan mengandung arti perilaku bijaksana. Dewi Prudence selalu tampil dengan panah, ular, dan cermin.</p>
            <img class="img-responsive center-block profile mt-30 img-logo" src="{{ URL::asset('img/arti_logo.jpg') }}" alt="Logo PRU">          
          </div>

        </div>
      </div>

    </section>

    <!-- Komentar Section -->
    @include('layout.service')
    
    <!-- Footer -->
    @include('layout.footer')
  </div>
</body>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="{{ URL::asset('js/index.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</html>
