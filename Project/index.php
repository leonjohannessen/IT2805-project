<!--

WRITTEN BY: Kristine Rise Fry

WHEN: November 2016

PURPOSE: give a general introduction of the diffrent services da carlo provides

-->
<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8">
    <title>Da Carlo Catering</title>

    <?php
      /* Require the common head elements */
      require 'parts/head.php';
    ?>

    <!-- page specific styles for index.html -->
    <link rel="stylesheet" href="css/style-index.css">

  </head>

  <body>

    <!-- page header and global navigation -->
    <header>

      <?php
        /* Require the header and set the active page */
        $active = 'index';
        require 'parts/navbar.php';
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

    <!-- background image -->
    <div id="background-image">
      <img src="img/header-carousel/header-paella.jpg" alt="Paella">
    </div>

    <!-- page content -->
    <main>
      <section class="intro">
        <div class="container">
          <h2>Velkommen</h2>
          <p>
            Bak Da Carlo Catering står Juan Carlos, Cesare og Roberto, tre erfarne kokker
            som tilsammen representerer matkultur fra det italienske, det spanske
            og det latinamerikanske kjøkkenet. Dette betyr at vi kan tilby rike
            smaksopplevelser tilberedt med de beste råvarer og med latinsk temperament.
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
                Kokkene som gjør avtale med deg, er også de som gjør innkjøp av råvarene, lager maten og følger den helt frem til lokalet der maten presenteres for gjestene.
                På denne måten sikrer vi at dine ønsker og preferanser ivaretas på en god måte.
              </p>
              <p>
                Vi bruker kun råvarer av topp kvalitet og tilbereder
                dem på beste måte med vår erfaring fra det latinske kjøkkenet.
              </p>
              <a href="catering.php" class="button">Se vår cateringmeny</a>
            </div>
          </div>
        </div>
      </section>

      <section class="row">
        <div class="container">
          <div id="intro-canteen" class="box left">
            <div class="text-wrapper">
              <h3>Kantine</h3>
              <p>
                Hver bedrift har sine ulike behov. Vi i Da Carlo er opptatt av
                et aktivt samarbeid for å finne frem til gode løsninger og skreddersy
                et konsept som kan imøtekomme akkurat deres ønsker og preferanser.
              </p>
              <p>
                Ta kontakt for nærmere informasjon. Vi er en samarbeidspartner du kan stole på!
              </p>
              <a href="kantine.php" class="button">Se våre referanser</a>
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
              <a href="om.php" class="button">Les mer om oss</a>
            </div>
          </div>
          <figure>
            <img src="img/lmh-kokker11.jpg" alt="Ansatte Da Carlo Catering" />
          </figure>
        </div>
      </section>

    </main>

    <?php
      /* Require the cta part */
      require 'parts/cta.php';

      /* Require the footer (and global scripts) */
      require 'parts/footer.php';
    ?>

    <!-- include page specific javascript files -->
    <script src="js/header-carousel.js"></script>
  </body>
</html>
