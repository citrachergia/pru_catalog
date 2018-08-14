<!DOCTYPE html>
<html ng-app="testApp">

<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}">
  <link rel='stylesheet' href="{{ URL::asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel='stylesheet' href="{{ URL::asset('css/fonts.min.css') }}">
  <link rel='stylesheet' href="{{ URL::asset('css/font-awesome.min.css') }}">
</head>

<body data-spy="scroll" data-target="#main-nav" data-offset="60">
  <!-- Footer -->
  <footer class="row bg-honeycomb">
    <div class="row mb-30 mt-30">
      <div class="col-sm-3 col-lg-2 col-lg-offset-1 text-left">
        <h3>Prudential</h3>
        <p>Solusi</p>
        <p>Profil Kami</p>
      </div>
      <div class="col-sm-3 col-lg-2 text-left">
        <h3>Solusi</h3>
        <p>Pendidikan</p>
        <p>Kondisi Kritis</p>
        <p>Kesehatan</p>
        <p>Proteksi</p>
        <p>Investasi</p>
      </div>
      <div class="col-sm-3 col-lg-3 text-left">
        <h3>Profil</h3>
        <p>Tentang Perusahaan</p>
        <p>Grup Kami</p>
        <p>Penghargaan</p>
        <p>Galeri</p>
      </div>
      <div class="col-sm-3 col-lg-4 text-left">
        <h3>Ikuti Kami</h3>
        <a class="social" href="https://www.linkedin.com/company/prudential-indonesia-pt-prudential-life-assurance-/" target="_blank" title="LinkedIn">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/LinkedIn-black.png?raw=true" alt="LinkedIn Icon">
        </a>
        <a class="social" href="https://twitter.com/PRU_ID?lang=en" target="_blank" title="Twitter">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Twitter-black.png?raw=true" alt="Twitter Icon">
        </a>
        <a class="social" href="https://www.instagram.com/id_prudential/?hl=en" target="_blank" title="Instagram">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Instagram-black.png?raw=true" alt="Instagram Icon">
        </a>
      </div>
    </div>
    <div class="col-xs-12 text-center">
      <hr class="dashed">
      <small class="gray">Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Citra Chergia &mdash; PT. Prudential Life Assurance</small>
    </div>
  </footer>
</body>
<script type="text/javascript">
  //module angular
    var test = angular.module('testApp', []);
</script>
</html>
