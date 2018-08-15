<!DOCTYPE html>
<html ng-app>

@extends('layout.header-view')

<head>
  <meta charset="UTF-8">
  <title>Investasi | Solusi</title>
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
  <header id="top" class="investasi content-solusi">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="title"><b>INVESTASI</b></h1>
          <p>Temukan berbagai portofolio yang sesuai dengan kebutuhan Anda</p>
          <a class="btn td-btn outline white scroll mt-30" href="#content">Pelajari lebih lanjut</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Content -->
  <div id="content" class="container-fluid text-center">
    <section id="content" class="row bg-white bg-shadow">
      <ul class="card-list">
        <li class="card">
          <a href="/solusi/viewdetail" class="card-image" style="background-image: url('../img/investasi/PRUlink-assurance-account.jpg');" data-image-full="{{ URL::asset('img/investasi/PRUlink-assurance-account.jpg') }}">
            <img src="{{ URL::asset('img/investasi/PRUlink-assurance-account.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUlink assurance account</h4>
          </a>
        </li>
        <li class="card">
          <a href="/solusi/viewdetail" class="card-image" style="background-image: url('../img/investasi/PRUsyariah-assurance-account.jpg');" data-image-full="{{ URL::asset('img/investasi/PRUsyariah-assurance-account.jpg') }}">
            <img src="{{ URL::asset('img/investasi/PRUsyariah-assurance-account.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUlink syariah assurance account</h4>
          </a>
        </li>
        <li class="card">
          <a href="/solusi/viewdetail" class="card-image" style="background-image: url('../img/investasi/PRUlink-capital-account.jpg');" data-image-full="{{ URL::asset('img/investasi/PRUlink-capital-account.jpg') }}">
            <img src="{{ URL::asset('img/investasi/PRUlink-capital-account.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUlink capital account</h4>
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
