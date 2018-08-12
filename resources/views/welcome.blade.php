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
          <li><a class="scroll" href="#about">About</a></li>
          <li><a class="scroll" href="#portfolio">Portfolio</a></li>
          <li><button class="btn td-btn small outline red" data-toggle="modal" data-target="#contactModal">Contact</button></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <header id="top" class="jumbotron">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
          <img class="img-responsive center-block logo" src="{{ URL::asset('img/logo.png') }}" alt="TD Logo">
        </div>
        <div class="col-xs-12">
          <h1 class="title">PRUDENTIAL</h1>
          <p>Always Listening. Always Understanding.</p>
          <a class="btn td-btn outline green scroll mt-30" href="#content" title="Learn more about me!">Learn more</a>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content Begins -->
  <div id="content" class="container-fluid text-center">
    <!-- About Me Section -->
    <section id="about" class="row bg-white bg-shadow">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="mb-30">About</h1>
        </div>
      </div>
      <div class="row mb-30">
        <div class="col-xs-12 col-md-3 col-md-offset-1 col-lg-2 col-lg-offset-2">
          <img class="img-responsive center-block profile mb-30" src="{{ URL::asset('img/group_pru.jpg') }}" alt="PRU Group">
        </div>
        <div class="col-sm-8 col-sm-offset-2 col-md-7 col-md-offset-0 col-lg-6 text-left">
          <h4>Hello there! I'm a front-end developer and aspiring UX designer based in Chicago.</h4>
          <p>Having spent a large chunk of my life in art school, I've finally found my passion at the crossroads of design and technology. I started off as an undergrad in industrial design, then worked some graphic design gigs, and later went back to school for web design and new media. The one lesson that stood out throughout this journey was the importance of the end user. Whether a physical or digital product, its purpose needs to be obvious, and the product itself has to be easy to use. So no matter what I'm working on, I always have the user in mind and try my hardest to create an enjoyable experience for them.</p>
          <p>Currently, I spend most of my time designing websites and marketing material for small businesses and participating in the <a href="https://goo.gl/jhil8F" target="_blank">#100DaysOfCode</a> challenge to keep my skills sharp. When I'm not busy, you can find me obsessing over food, cats, skincare, and video games, or working on one of my many hobbies like playing the ukulele or crocheting. I tend to switch things up every few months, so if you want to know what I'm up to, just <a class="scroll" href="#follow-me">follow me!</a> :)</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <hr class="dashed">
          <h2 class="mb-60">What I Do</h2>
        </div>
        <div class="col-sm-3 col-lg-2 col-lg-offset-2">
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
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button class="btn td-btn outline green mt-30" data-toggle="modal" data-target="#resumeModal">View my Resume</button>
        </div>
      </div>
    </section>
    <!-- Portfolio Section -->
    <section id="portfolio" class="row bg-star-y">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="mb-60">Portfolio</h1>
        </div>
      </div>
      <div class="row">
        <div id="projects" class="carousel slide col-xs-12" data-ride="carousel" data-interval="false">
          <div class="row">
            <!-- Carousel Prev Button -->
            <div class="col-xs-1">
              <a class="left carousel-control" href="#projects" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
            </div>
            <div class="col-xs-10">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="col-sm-7">
                    <img class="img-responsive center-block mb-30" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/tribute/tribute-teaser.png?raw=true" alt="Twenty One Pilots Tribute Page">
                  </div>
                  <div class="col-sm-5">
                    <div class="carousel-caption card">
                      <h3>Twenty One Pilots Tribute</h3>
                      <h4>Responsive Web Design</h4>
                      <button class="btn td-btn small outline green" data-toggle="modal" data-target="#tributeModal">View Details</button>
                    </div>
                  </div>
                </div><!-- /.item -->
                <div class="item">
                  <div class="col-sm-7">
                    <img class="img-responsive center-block mb-30" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/tms/tms-teaser.png?raw=true" alt="Too Much Sauce">
                  </div>
                  <div class="col-sm-5">
                    <div class="carousel-caption card">
                      <h3>Too Much Sauce</h3>
                      <h4>Responsive Web Design</h4>
                      <button class="btn td-btn small outline green" data-toggle="modal" data-target="#tmsModal">View Details</button>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-7">
                    <img class="img-responsive center-block mb-30" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/rb/rb-teaser.png?raw=true" alt="Ryan Bechtel">
                  </div>
                  <div class="col-sm-5">
                    <div class="carousel-caption card">
                      <h3>Ryan Bechtel</h3>
                      <h4>Responsive Web Design</h4>
                      <button class="btn td-btn small outline green" data-toggle="modal" data-target="#rbModal">View Details</button>
                    </div>
                  </div>
                </div><!-- /.item -->
              </div><!-- /.carousel-inner -->
            </div>
            <div class="col-xs-1">
              <!-- Carousel Next Button -->
              <a class="right carousel-control" href="#projects" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div><!-- / Next Btn -->
            <div class="col-xs-12">
              <!-- Indicators -->
              <ol class="carousel-indicators mt-30">
                <li data-target="#projects" data-slide-to="0" class="active"></li>
                <li data-target="#projects" data-slide-to="1"></li>
                <li data-target="#projects" data-slide-to="2"></li>
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
        <div class="card mb-30">
          <a class="twitter-timeline"  href="https://twitter.com/dusign/" data-widget-id="329035628920573952" data-chrome="noheader nofooter noborders transparent" data-tweet-limit="1" data-width="100%">Tweets by @dusign</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </div>
      <div id="follow-me" class="col-xs-12 col-sm-5 col-sm-offset-1 mb-30">
        <h3>Follow me!</h3>
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
      </div>
      <div class="col-xs-12 text-center">
        <hr class="dashed">
        <h2>&ndash; Thanks for visiting! &ndash;</h2>
        <small class="gray">Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Tiffany Du &mdash; All Rights</small>
      </div>
    </footer>
  </div>

  <!-- Resume Modal -->
  <div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="resumeTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="resumeTitle">Resume</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
              <h2>Experience</h2>
            </div>
          </div>
          <div class="row mb-15">
            <div class="col-md-3 col-lg-2 col-lg-offset-1">
              <p class="year">2012 - Present</p>
            </div>
            <div class="col-md-9 col-lg-8">
              <h4>Freelancer</h4>
              <p class="mb-0"><strong>Too Much Sauce - Web Design and Development</strong></p>
              <p>Designed and developed a website using Bootstrap to help show off a series of animated GIFs. Currently working on converting into a Wordpress theme.</p>
              <p class="mb-0"><strong>Ryan Bechtel - Web Design and Development</strong></p>
              <p>Redesigned and developed a responsive website that better highlights the client’s work reel.</p>
              <p class="mb-0"><strong>Kaelyn Benham - Web Consultation</strong></p>
              <p>Automated process of capturing new subscribers’ email addresses by integrating Eventbrite and MailChimp using Zapier. Coded temporary “Coming Soon” page with MailChimp signup form. Helped set up hosting service with domain transfers and FTP accounts.</p>
              <p class="mb-0"><strong>MK Education - Web and Graphic Design</strong></p>
              <p>Designed a set of header banners for website. Helped customize and complete website using Wix.</p>
              <p class="mb-0"><strong>Chef Arun - Graphic Design</strong></p>
              <p>Developed a logo for the upcoming line of Thai packaged foods. Created artwork for rice bag packaging.</p>
              <p class="mb-0"><strong>East China Inn - Graphic Design</strong></p>
              <p>Designed punch card coupons to increase customer loyalty.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-lg-2 col-lg-offset-1">
              <p class="year">2016</p>
            </div>
            <div class="col-md-9 col-lg-8">
              <h4>Inside Sales / Customer Service Representative</h4>
              <p><strong>D&amp;H Granite and Marble Supply</strong></p>
              <ul>
                <li>Standardized the order fulfillment workflow to establish consistency between team members.</li>
                <li>Responsible for assisting customers with project inquiries and estimates, coordinating fabrication and installation schedules, and conflict resolution.</li>
                <li>Other duties included managing inventory and training new employees.</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-5 col-lg-offset-1">
              <div class="row">
                <div class="col-xs-12">
                  <h2>Education</h2>
                </div>
              </div>
              <div class="row mb-15">
                <div class="col-sm-3 col-md-4">
                  <p class="year">2012 - 2015</p>
                </div>
                <div class="col-sm-9 col-md-8">
                  <p class="mb-0"><strong>MFA in Web Design &amp; New Media</strong></p>
                  <p>Academy of Art University</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-md-4">
                  <p class="year">2007 - 2010</p>
                </div>
                <div class="col-sm-9 col-md-8">
                  <p class="mb-0"><strong>BFA in Industrial Design</strong></p>
                  <p>Columbia College Chicago</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5">
              <div class="row">
                <div class="col-xs-12">
                  <h2>Skills</h2>
                </div>
              </div>
              <div class="row">
                <ul>
                  <li><strong>Web:</strong> HTML, CSS, JavaScript, jQuery, PHP (limited)</li>
                  <li><strong>UX/UI Tools:</strong> Sketch, Balsamiq, Axure, InVision</li>
                  <li><strong>Adobe CC:</strong> Illustrator, InDesign, Photoshop</li>
                  <li><strong>Other:</strong> Positive, adaptable, attentive, resourceful</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row text-center">
            <a class="btn td-btn outline green mb-30" href="https://github.com/tiffanyadu/portfolio/blob/master/assets/docs/Tiffany_Du_Resume.pdf" target="_blank" download> Download PDF</a>
            <a class="btn td-btn outline green iconBtn mb-30" href="https://www.linkedin.com/in/tiffanyadu/" target="_blank">
            </div>
            <div class="modal-footer center">
              <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Resume</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Tribute Page Project Modal -->
    <div class="modal fade" id="tributeModal" tabindex="-1" role="dialog" aria-labelledby="tributeTitle">
      <div class="modal-dialog wide" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center" id="tributeTitle">Project Details</h3>
          </div><!-- /.modal-header -->
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12 bg-star-g">
                <img class="img-responsive center-block hero" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/tribute/tribute-hero.png?raw=true" alt="Tribute Page Hero Image">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2>Twenty One Pilots Tribute</h2>
                <h4>Responsive Web Design</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
                <p>This tribute page was created for a <a href="https://www.freecodecamp.com/" target="_blank" title="Link to FreeCodeCamp">FreeCodeCamp</a> project. The goal was very simple: make a one-page site with images, text, and external links. I took this chance to practice using the Bootstrap 3 framework to create a tribute to one of my favorite bands at the moment, Twenty One Pilots (TOP). Lucky for me, they have such strong branding that the page nearly designed itself!</p>
                <p class="mb-30">I kept the color palette simple with black, white, and the signature TOP shade of red for the accent color. To add some visual interest, I used a subtle twill texture for the red backgrounds and styled the headings with a black background to give it a label maker tape effect. I also wrote some code that replaces the letter "O" with the scandinavian letter "&Oslash;" in the headings and navigation links to match the TOP logo.</p>
              </div>
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
                <p><strong>Technologies Used:</strong></p>
                <p class="mb-30">
                  <span class="label tag">Bootstrap 3</span>
                  <span class="label tag">Responsive Design</span>
                  <span class="label tag">HTML5</span>
                  <span class="label tag">CSS3</span>
                  <span class="label tag">JavaScript</span>
                  <span class="label tag">jQuery</span>
                </p>
                <a class="btn td-btn outline green mb-30" href="http://projects.tiffanydu.com/tribute/" target="_blank" title="Link to Tribute Page"> Visit Live Site</a>
                <a class="btn td-btn outline green mb-30 iconBtn" href="https://codepen.io/tiffanyadu/full/RKMavV/" target="_blank" title="Link to Tribute Page on CodePen"><img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Codepen-green.png?raw=true" alt="Codepen Icon">View on CodePen</a>
              </div>
            </div><!-- /.row -->
            <div class="modal-footer center">
              <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Too Much Sauce Project Modal -->
    <div class="modal fade" id="tmsModal" tabindex="-1" role="dialog" aria-labelledby="tmsTitle">
      <div class="modal-dialog wide" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center" id="tmsTitle">Project Details</h3>
          </div><!-- /.modal-header -->
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12 bg-star-g">
                <img class="img-responsive center-block hero" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/tms/tms-hero.png?raw=true" alt="Too Much Sauce Hero Image">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2>Too Much Sauce</h2>
                <h4>Responsive Web Design</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
                <p>Too Much Sauce (TMS) is a side project of motion graphic designer Ryan Bechtel, where he challenges himself to create brutalist designs. The purpose of the TMS website is to host his collection of animated GIFs, which were originally shared as Instagram stories.</p>
                <p class="mb-30">Ryan really liked the bold, high-contrast look of <a href="http://www.complex.com/" target="_blank" title="Complex.com">Complex.com</a>, a music and pop culture media/news website, so that's what inspired the design of this project. The color palette is mainly black and white with splashes of magenta and neon green from the TMS brand. It was built with the latest version of Bootstrap 4 and uses a small JavaScript library, <a href="https://github.com/krasimir/gifffer" target="_blank" title="Gifffer.js Github repo">Gifffer.js</a>, to prevent the animated GIFs from autoplaying when the page loads.</p>
              </div>
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
                <p><strong>Technologies Used:</strong></p>
                <p class="mb-30">
                  <span class="label tag">Bootstrap 4</span>
                  <span class="label tag">Responsive Design</span>
                  <span class="label tag">HTML5</span>
                  <span class="label tag">CSS3</span>
                  <span class="label tag">jQuery</span>
                  <span class="label tag">Gifffer.js</span>
                </p>
                <a class="btn td-btn outline green mb-30" href="http://tms.ryanbechtel.com/" target="_blank" title="Link to Too Much Sauce"> Visit Live Site</a>
              </div>
            </div><!-- /.row -->
            <div class="modal-footer center">
              <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Ryan Bechtel Project Modal -->
    <div class="modal fade" id="rbModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
      <div class="modal-dialog wide" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center" id="rbTitle">Project Details</h3>
          </div><!-- /.modal-header -->
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12 bg-star-g">
                <img class="img-responsive center-block hero" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/rb/rb-hero.png?raw=true" alt="Ryan Bechtel Hero Image">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2>Ryan Bechtel</h2>
                <h4>Responsive Web Design</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
                <p>This project was for Ryan Bechtel, a motion graphic designer in Chicago, IL. His main goal was to attract prospective clients for freelance jobs, so he wanted a website that showcases some of his best work.</p>
                <p class="mb-30">I kept the design of this website simple to help Ryan's work stand out. His reel (AKA a video portfolio) is the most important piece of content, probably the first thing his future clients would look for, so it is placed front and center on the landing page. To make the embedded videos responsive and looking good on all devices, I used a jQuery plugin called <a href="http://fitvidsjs.com/" target="_blank" title="Fitvids.js library">FitVids.js</a>, which gives the videos a fluid width. For the contact form, I used <a href="https://github.com/PHPMailer/PHPMailer" target="_blank" title="PHPMailer Plugin">PHPMailer</a>, an email sending library for PHP, to make it functional and also coded in a "honeypot" to help prevent spam. Other than the two plugins I just mentioned, the rest of this website was completely hand-coded.</p>
              </div>
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
                <p><strong>Technologies Used:</strong></p>
                <p class="mb-30">
                  <span class="label tag">Responsive Design</span>
                  <span class="label tag">HTML5</span>
                  <span class="label tag">CSS3</span>
                  <span class="label tag">PHP</span>
                  <span class="label tag">PHPMailer</span>
                  <span class="label tag">FitVids.js</span>
                </p>
                <a class="btn td-btn outline green mb-30" href="http://ryanbechtel.com/" target="_blank" title="Link to ryanbechtel.com">Visit Live Site</a>
              </div>
            </div><!-- /.row -->
            <div class="modal-footer center">
              <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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
  <script src="{{ URL::asset('js/angular.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

  </html>