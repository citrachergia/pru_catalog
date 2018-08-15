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
          <li><a class="scroll" href="#layanan">Layanan</a></li>
          <li>
            <div class="button_container_burger" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
            <div class="overlay" id="overlay">
              <nav class="overlay-menu">
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/solusi">Solusi</a></li>
                  <li><a href="/profil">Profil</a></li>
                </ul>
              </nav>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
