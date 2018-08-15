<!DOCTYPE html>
<html>

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

  <!-- Fixed Navbar -->
  <nav id="main-nav" class="navbar navbar-default ">
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- Menu Toggle -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand scroll" href="#top"><img class="pull-left logo" src="{{ URL::asset('img/logo.png') }}" alt="Pru Logo"><span>Prudential</span></a>
      </div>
      <!-- Collapsible Menu -->
      <div class="collapse navbar-collapse" id="menu">
        <div class="button_container_burger" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
        <div class="overlay" id="overlay">
          <nav class="overlay-menu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Solusi</a></li>
              <li><a href="#">Profil</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header id="top" class="kesehatan content-solusi">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="title"><b>KESEHATAN</b></h1>
          <p>Perlindungan kesehatan yang menyeluruh untuk Anda dan Keluarga</p>
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
          <a href="" class="card-image" style="background-image: url('../img/kesehatan/KV_PHSC-PLUS-PHSC-PLUS-SYARIAH.jpg');" data-image-full="{{ URL::asset('img/kesehatan/KV_PHSC-PLUS-PHSC-PLUS-SYARIAH.jpg') }}">
            <img src="{{ URL::asset('img/kesehatan/KV_PHSC-PLUS-PHSC-PLUS-SYARIAH.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUhospital&surgical cover plus</h4>
          </a>
        </li>
        <li class="card">
          <a href="" class="card-image" style="background-image: url('../img/kesehatan/PRUmed-cover.jpg');" data-image-full="{{ URL::asset('img/kesehatan/PRUmed-cover.jpg') }}">
            <img src="{{ URL::asset('img/kesehatan/PRUmed-cover.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUmed cover</h4>
          </a>
        </li>
        <li class="card">
          <a href="" class="card-image" style="background-image: url('../img/kesehatan/PRUprime-healthcare.jpg');" data-image-full="{{ URL::asset('img/kesehatan/PRUprime-healthcare.jpg') }}">
            <img src="{{ URL::asset('img/kesehatan/PRUprime-healthcare.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUprime healthcare</h4>
          </a>
        </li>
        <li class="card">
          <a href="" class="card-image" style="background-image: url('../img/kesehatan/KV_PHSC-PLUS-PHSC-PLUS-SYARIAH_sy.jpg');" data-image-full="{{ URL::asset('img/kesehatan/KV_PHSC-PLUS-PHSC-PLUS-SYARIAH_sy.jpg') }}">
            <img src="{{ URL::asset('img/kesehatan/KV_PHSC-PLUS-PHSC-PLUS-SYARIAH_sy.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUhospital&surgical cover plus syariah</h4>
          </a>
        </li>
        <li class="card">
          <a href="" class="card-image" style="background-image: url('../img/kesehatan/PRUmed-cover_sy.jpg');" data-image-full="{{ URL::asset('img/kesehatan/PRUmed-cover_sy.jpg') }}">
            <img src="{{ URL::asset('img/kesehatan/PRUmed-cover_sy.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUmed cover syariah</h4>
          </a>
        </li>
        <li class="card">
          <a href="" class="card-image" style="background-image: url('../img/kesehatan/PRUprime-healthcare_sy.jpg');" data-image-full="{{ URL::asset('img/kesehatan/PRUprime-healthcare_sy.jpg') }}">
            <img src="{{ URL::asset('img/kesehatan/PRUprime-healthcare_sy.jpg') }}">
          </a>
          <a class="card-description p_pru">
            <h4>PRUprime healthcare syariah</h4>
          </a>
        </li>
      </ul>
    </section>

    <!-- Layanan Section -->
    <section class="row bg-pink bg-shadow" id="layanan">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="mb-30">Ingin Tau Lebih Lanjut?</h1>
        </div>
        <div class="col-xs-12">
          <button class="btn btn-default td-btn outline white" data-toggle="modal" data-target="#contactModal">Tanyakan Disini</button>
        </div>
      </div>
    </section>

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
  </div>

  <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactTitle">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-pink">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title" id="contactTitle">Contact Me</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <form class="mb-15">
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <textarea class="form-control" id="message" rows="6" placeholder="Your message here..." required></textarea>
            </div>
            <small>*All fields are required</small>
            <div class="checkbox">
              <label>
                <input type="checkbox"> I'm a robot!
              </label>
            </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn td-btn outline small white" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn td-btn outline small white">Send Message</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</body>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="{{ URL::asset('js/index.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</html>
