<!DOCTYPE html>
<html ng-app>

@extends('layout.header-view')

<head>
  <meta charset="UTF-8">
  <title>Proteksi | Solusi</title>
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
  <header id="top" class="proteksi content-solusi">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="title"><b>PROTEKSI</b></h1>
          <p>Rencana perlindungan yang kami rancang untuk melindungi Anda dan orang yang Anda cintai dari ketidakpastian</p>
          <a class="btn td-btn outline white scroll mt-30" href="#content" title="Learn more about me!">Pelajari lebih lanjut</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Content -->
  <div id="content" class="container-fluid text-center">
    <section id="content" class="row bg-white bg-shadow">
      <ul class="card-list">
        <li class="card">
          <a href="/solusi/viewdetail" class="card-image" style="background-image: url('../img/proteksi/PRUlife-cover.jpg');" data-image-full="{{ URL::asset('img/proteksi/PRUlife-cover.jpg') }}">
            <img src="{{ URL::asset('img/proteksi/PRUlife-cover.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUlife cover</h4>
          </a>
        </li>
        <li class="card">
          <a href="/solusi/viewdetail" class="card-image" style="background-image: url('../img/proteksi/PRUmy-child.jpg');" data-image-full="{{ URL::asset('img/proteksi/PRUmy-child.jpg') }}">
            <img src="{{ URL::asset('img/proteksi/PRUmy-child.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUmy child</h4>
          </a>
        </li>
        <li class="card">
          <a href="/solusi/viewdetail" class="card-image" style="background-image: url('../img/proteksi/PRUpersonal-accident-death-disablement-plus.jpg');" data-image-full="{{ URL::asset('img/proteksi/PRUpersonal-accident-death-disablement-plus.jpg') }}">
            <img src="{{ URL::asset('img/proteksi/PRUpersonal-accident-death-disablement-plus.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUsafe guard</h4>
          </a>
        </li>
        <li class="card">
          <a href="/solusi/viewdetail" class="card-image" style="background-image: url('../img/proteksi/PRUpersonal-accident-death-plus.jpg');" data-image-full="{{ URL::asset('img/proteksi/PRUpersonal-accident-death-plus.jpg') }}">
            <img src="{{ URL::asset('img/proteksi/PRUpersonal-accident-death-plus.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUpersonal accident death & disablement</h4>
          </a>
        </li>
      </ul>
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
