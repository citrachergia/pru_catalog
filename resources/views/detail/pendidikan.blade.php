<!DOCTYPE html>
<html ng-app>

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
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a class="scroll" href="#top">Home <span class="sr-only">(current)</span></a></li>
          <li><a class="scroll" href="#tentang">Tentang</a></li>
          <li><a class="scroll" href="#solusi">Solusi</a></li>
          <li><button class="btn td-btn small outline red" data-toggle="modal" data-target="#contactModal">Contact</button></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header id="top" class="jumbotron">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
          <img class="img-responsive center-block logo" src="{{ URL::asset('img/logo.png') }}" alt="TD Logo">
        </div>
        <div class="col-xs-12">
          <h1 class="title">PRUDENTIAL</h1>
          <p>Always Listening. Always Understanding.</p>
          <a class="btn td-btn outline green scroll mt-30" href="#content" title="Learn more about me!">Pelajari lebih lanjut</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Tentang -->
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


      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <hr class="dashed">
          <h2 class="mb-60">What I Do</h2>
        </div>
        <!-- <div class="col-sm-3 col-lg-2 col-lg-offset-2">
          <img class="img-responsive center-block icon" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/work/rwd-icon.png?raw=true" alt="Responsive Web Design Icon">
          <p>Responsive Web Design</p>
        </div>
        <div class="col-sm-3 col-lg-2">
          <img class="img-responsive center-block icon" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/work/ui-ux-icon.png?raw=true" alt="UI/UX Design Icon">
          <p>UI/UX Design</p>
        </div>
        <div class="col-sm-3 col-lg-2">
          <img class="img-responsive center-block icon" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/work/dev-icon.png?raw=true" alt="Development Icon">
          <p>Development</p>
        </div>
        <div class="col-sm-3 col-lg-2 mb-30">
          <img class="img-responsive center-block icon" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/work/star-icon.png?raw=true" alt="Identity and Branding Icon">
          <p>Identity &amp; Branding</p>
        </div> -->
      </div>
    </section>


    <!-- Portfolio Section -->
    <section id="solusi" class="row bg-star-y">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="text-redpru">Solusi</h1>
        </div>
      </div>
      <div class="row">
        <div id="projects" class="carousel slide col-xs-12" data-ride="carousel" data-interval="false">
          <div class="row">
            <!-- Carousel Prev Button -->
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
                      <a href="/pendidikan" class="card-image" style="background-image: url('../img/kritis.jpg');" data-image-full="{{ URL::asset('img/kritis.jpg') }}">
                        <img src="{{ URL::asset('img/kritis.jpg') }}">
                      </a>
                      <a class="card-description p_pru">
                        <h4>Kondisi Kritis</h4>
                        <p>Dukungan finansial Anda ketika kondisi kritis melanda</p>
                      </a>
                    </li>
                    <li class="card">
                      <a href="/pendidikan" class="card-image" style="background-image: url('../img/kesehatan.jpg');" data-image-full="{{ URL::asset('img/kesehatan.jpg') }}">
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
                        <a class="card-image" style="background-image: url('../img/proteksi.jpg');" data-image-full="{{ URL::asset('img/proteksi.jpg') }}">
                          <img src="{{ URL::asset('img/proteksi.jpg') }}">
                        </a>
                        <a class="card-description" href="https://convergecult.bandcamp.com/album/jane-doe" target="_blank">
                          <h4>Proteksi</h4>
                          <p>Converge</p>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div><!-- /.carousel-inner -->
              </div>
              <div class="col-xs-1">
                <!-- Carousel Next Button -->
                <a class="right carousel-control" href="#projects" role="button" data-slide="next">
                  <span class="p_pru" aria-hidden="true">></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- / Next Btn -->
              <div class="col-xs-12 mt-60">
                <ol class="carousel-indicators mt-30">
                  <li data-target="#projects" data-slide-to="0" class="active"></li>
                  <li data-target="#projects" data-slide-to="1"></li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /#projects -->
        </div><!-- /.row -->
      </section>


      <!-- Contact Me Section -->
      <section class="row bg-pink bg-shadow">
        <div class="col-xs-12">
          <h1 class="mb-30">Like what you see?</h1>
          <button class="btn btn-default td-btn outline white" data-toggle="modal" data-target="#contactModal">Send me a message!</button>
        </div>
      </section>

      <!-- Footer -->
      <footer class="row text-left bg-honeycomb">
        <div class="col-xs-12 col-sm-6">
          <h3>Latest Tweet</h3>

        </div>
        <!-- <div id="follow-me" class="col-xs-12 col-sm-5 col-sm-offset-1 mb-30">
          <h3>Follow</h3>
         <a class="social" href="https://www.linkedin.com/in/tiffanyadu/" target="_blank" title="LinkedIn">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/LinkedIn-black.png?raw=true" alt="LinkedIn Icon">
        </a>
        <a class="social" href="https://twitter.com/dusign/" target="_blank" title="Twitter">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Twitter-black.png?raw=true" alt="Twitter Icon">
        </a>
        <a class="social" href="https://www.instagram.com/dusign/" target="_blank" title="Instagram">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Instagram-black.png?raw=true" alt="Instagram Icon">
        </a>
        <a class="social" href="https://github.com/tiffanyadu/" target="_blank" title="Github">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Github-black.png?raw=true" alt="Github Icon">
        </a>
        <a class="social" href="https://codepen.io/tiffanyadu/" target="_blank" title="Codepen">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Codepen-black.png?raw=true" alt="Codepen Icon">
        </a>
        </div> -->
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
          </div>
          <!-- /.modal-header -->
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src="{{ URL::asset('js/index.js') }}"></script>
  <script src="{{ URL::asset('js/angular.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

  </html>
