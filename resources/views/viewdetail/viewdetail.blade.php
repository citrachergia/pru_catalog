<!DOCTYPE html>
<html>

@extends('layout.header-view')

<head>
  <meta charset="UTF-8">
  <title>PRUlink Edu Protection | Pendidikan</title>
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
  <header id="top" class="hd-viewdetail content-solusi">
    <div class="title-hd">
      <h3>PRUlink Edu Protection</h3>
    </div>
    <div class="title-hd-2">
      <p>Lindungi keceriaannya hari ini dan pendidikannya hari nanti</p>
    </div>
  </header>

  <!-- Content -->
  <div id="content" class="container-fluid">
    <section id="content" class="row bg-white bg-shadow">
      <div class="row mb-30">
        <div class="col-xs-12 padding-ct">
          <p class="text-justify mt-30">PRUlink edu protection dirancang untuk melindungi keceriaan anak Anda hari ini dan pendidikannya di hari nanti. Produk inovatif ini merupakan produk terkait investasi yang memberikan santunan dana setiap bulannya saat risiko terjadi. Dana investasi berpotensi untuk terus berkembang, dan pembayaran Premi akan dilanjutkan apabila terjadi risiko.</p>

          <div class="box">
            <p>Apakah Anda pernah menggunakan manfaat ini?</p> 
          </div>

          <h4> Detail Produk </h4>
          <table class="detail-produk">
            <tr>
              <td>Mata Uang</td>
              <td>Rupiah</td>
            </tr>
            <tr>
              <td>Minimum Premi/Kontribusi Bulanan</td>
              <td>Rp 500.000/bulan</td>
            </tr>
            <tr>
              <td>Usia Masuk Tertanggung/Peserta</td>
              <td>1 hari – 15 tahun (Ulang tahun berikutnya)</td>
            </tr>
            <tr>
              <td>Masa Perlindungan s/d Usia Tertanggung/Peserta</td>
              <td>Sampai dengan jika Tertanggung meninggal dunia sebelum berusia 99 tahun, atau apabila jika Tertanggung menderita cacat total dan tetap setelah berusia 6 tahun dan sebelum berusia 70 tahun.</td>
            </tr>
            <tr>
              <td>Manfaat Tambahan</td>
              <td>PRUparent payor 33, PRUedu protection, PRUlink term, PRUpersonal accident death & disablement plus </td>
            </tr>
            <tr>
              <td>Polis Dasar</td>
              <td>n/a</td>
            </tr>
            <tr>
              <td>Manfaat</td>
              <td> 
                1. Memberikan 2 manfaat perlindungan untuk orang tua dan anak sekaligus dalam satu polis yang komprehensif. <br>
                2. Memberikan manfaat bulanan sampai anak Anda berusia 18 atau 25 tahun (sesuai dengan pilihan Pemegang Polis)*. <br>
                3. Mengimbangi dampak inflasi karena setiap 3 tahun sekali manfaat bulanan akan naik sebesar 15% dari nilai manfaat bulanan awal.<br>
                4. Dana investasi akan tetap berpotensi untuk berkembang sesuai dengan jenis investasi yang dipilih nasabah karena kami akan melanjutkan pembayaran 5. Premi polis anak Anda sampai anak Anda berusia 18 atau 25 tahun*. <br>
                6. Memberikan kemudahan untuk aplikasi anak kedua**.<br><br>
                * Apabila terjadi risiko kematian/ terkena penyakit kondisi kritis/ mengalami Cacat Total dan Tetap terhadap diri Anda sebagai Tertanggung Tambahan<br>
                ** Berdasarkan ketentuan yang berlaku di Prudential Indonesia 
              </td>
            </tr>
          </table>
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
