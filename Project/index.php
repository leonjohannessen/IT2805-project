<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Da Carlo Catering</title>

    <!-- define viewport to ensure no horizontal scroll -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- include stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- include google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i"rel="stylesheet">

    <!-- page specific styles for index.html -->
    <link rel="stylesheet" href="css/style-index.css">

  </head>

  <script>

  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')

  </script>

  <body>

    <!-- page header and global navigation -->
    <header>

      <?php 
        /* Require the header */
        $active = 'index';
        require 'parts/header.php';
      ?>

      <!-- header carousel on frontpage -->
      <div id="headerCarousel">
        <div class="slide">
          <img src="img/header-carousel/header-paella.jpg" alt="Paella">
        </div>
        <div class="slide">
          <img src="img/header-carousel/header-chilli.jpg" alt="Chilli">
        </div>
        <div class="slide">
          <img src="img/header-carousel/header-klasetomat.jpg" alt="Tomatoes">
        </div>
        <div class="slide">
          <img src="img/header-carousel/header-paprika.jpg" alt="Peppers">
        </div>
        <div class="slide">
          <img src="img/header-carousel/header-tomat.jpg" alt="Tomatoes two">
        </div>
      </div>

    </header>

    <!-- page content -->
    <main>
      <section class="intro">
        <div class="container">
          <h2>Velkommen</h2>
          <p>
            Da Carlo består av Juan Carlos, Cesare og Roberto, tre erfarne kokker
            som tilsammen representerer matkultur fra det italienske, det spanske
            og det latinamerikanske kjøkkenet. Dette betyr at vi kan tilby rike
            smaksopplevelser tilberedt med de ypperste råvarer og med latinsk temperament.
          </p>
        </div>
      </section>

      <section class="row">
        <div class="container">
          <div id="intro-catering" class="box right dark">
            <div class="text-wrapper">
              <h3>Catering</h3>
              <p>
                Vårt varemerke er personlig service og individuell tilpasning.
                Kokkene som gjør avtale med deg, er også de som lager maten og
                følger den helt frem til lokalet der maten presenteres for gjestene.
                På denne måten sikrer vi at dine ønsker og preferanser ivaretas på
                en god måte.
              </p>
              <p>
                Vi bruker kun råvarer av topp kvalitet og tilbereder
                dem på beste måte med vår erfaring fra det latinske kjøkkenet.
              </p>
              <a href="#" class="button">Se vår cateringmeny</a>
            </div>
          </div>
          <!--
          <div id="catering-quote" class="box left tight dark">
            <div class="text-wrapper">
              <blockquote cite="http://nets.no">
                <p>Da Carlo leverer ikke bare mat, men en opplevelse!</p>
                <footer>Marie Nelsvik, i Nets strømmen</footer>
              </blockquote>
            </div>
          </div>-->
        </div>
      </section>

      <section class="row">
        <div class="container">
          <div id="intro-canteen" class="box left">
            <div class="text-wrapper">
              <h3>Kantine</h3>
              <p>
                Hver bedrift har sine ulike behov og vi i Da Carlo er opptatt av
                et aktivt samarbeid for å finne frem til gode løsninger og skreddersy
                et konsept som kan imøtekomme akkurat deres ønsker og preferanser.
              </p>
              <p>
                Ta kontakt for nærmere informasjon. Vi er en samarbeidspartner
                du kan stole på.
              </p>
              <a href="#" class="button">Se vår kantinemeny</a>
            </div>
          </div>
        </div>
      </section>

      <section class="row">
        <div class="container">
          <div id="intro-about" class="box center blue">
            <div class="text-wrapper">
              <h3>Hvem vi er</h3>
              <p>
                God mat gir en ekstra dimensjon til alle møter mellom mennesker,
                om det er i kantina på jobben, store høytidsdager eller uformelle
                firmafester.
              </p>
              <p>
                Vi har samlet de beste smakene fra det italienske,
                spanske og latinamerikanske kjøkkenet og ønsker å tilby spennende
                og minneverdige smaksopplevelser tilpasset dere.
              </p>
              <a href="#" class="button">Les mer om oss</a>
            </div>
          </div>
          <figure>
            <img src="img/lmh-kokker11.jpg" alt="Ansatte Da Carlo Catering" />
          </figure>
        </div>
      </section>

    </main>

    <!-- call to action -->
    <section class="cta">
      <div class="container">
        <p>Ta kontakt for et uforpliktende tilbud.</p>
        <h4>+47 973 27 322, post@dacarlo.no</h4>
        <a href="#" class="button">Kontakt oss</a>
      </div>
    </section>

    <!-- page footer -->
    <footer>
      <div class="container">
        <p> <i>
        “If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.”
      </p></i>
      <p>- J.R.R Tolkien </p>
          <!-- navbar -->

          <!-- logo -->

          <!-- copyright -->
          <p>2016 © Da Carlo Catering</p>


      </div>
    </footer>

    <!-- include javascript files -->
    <script src="js/sticky-header.js"></script>
    <script src="js/mobile-menu-toggler.js"></script>

    <!-- include page specific javascript files -->
    <script src="js/header-carousel.js"></script>
  </body>
</html>
