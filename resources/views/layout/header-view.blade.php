<!-- Fixed Navbar -->
<nav id="main-nav" class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand scroll" href="#top"><img class="pull-left logo" src="{{ URL::asset('img/logo.png') }}" alt="Pru Logo"><span>Prudential</span></a>
    </div>
    <!-- Collapsible Menu -->
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
  </div>
</nav>

<script src="{{ URL::asset('js/index.js') }}"></script>