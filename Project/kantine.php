<!--

WRITTEN BY: Kristine Rise Fry

WHEN: November 2016

PURPOSE: provide information about the possibility to order da carlo as a canteen service

-->
<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8">
    <title>Da Carlo Catering - Kantine</title>

    <?php
      /* Require the common head elements */
      require 'parts/head.php';
    ?>

    <!-- page specific styles for kantine.html -->
    <link rel="stylesheet" href="css/style-kantine.css">

  </head>

  <body>

    <!-- page header and global navigation -->
    <header>

      <?php
        /* Require the header and set the active page */
        $active = 'kantine';
        require 'parts/navbar.php';
      ?>

    </header>

    <!-- background image -->
    <div id="background-image">
      <img src="img/header-images/header-kantine.jpg" alt="kantine">
    </div>

    <!-- page content -->
    <main>
      <section class="intro">
        <div class="container">
          <div id="text-wrapper">
            <h2>Kantine</h2>
            <p id= "introtext">Hva har du lyst på til lunsj i dag? Våre kokker har lang erfaring innen kantinedrift, matservering til møter og matservering ved ulike arrangement.
              Vår målsetting er å servere variert, sunn og delikat mat basert på gode råvarer.
              Vi ønsker i tillegg at den latinske matkulturen vi bærer med oss, kan sette preg på maten som serveres. Vi har evnen til å improvisere og kan tilby et vidt spekter av retter.
            </p>
            <p>
              Variasjon i mattilbudet preger også våre planlagte konsepter.
              I kantina skal gjestene innta et godt måltid og oppleve at vi tilstreber å dekke flest mulig smaksretninger og behov.
              Gode råvarer, fokus på ernæring og respekt for årstidens variasjon er i den sammenheng viktig. De bærende elementene i kantinedriften kan for eksempel være salatbuffet, varm mat, brødbuffet, påsmurt mat og i tillegg temadager.
            </p>
            <p>
              Hver bedrift har sine ulike behov, og vi i Da Carlo er opptatt av et aktivt samarbeid for å finne frem til gode løsninger og skreddersy et konsept som kan imøtekomme akkurat deres ønsker og preferanser. Ta kontakt for nærmere informasjon. Vi er en samarbeidspartner du kan stole på.
            </p>
          </div>
        </div>

      </section>

      <section class="row">
        <div class="container">
          <div id="recommendation-nets-skoyen" class="box left">
            <div class="text-wrapper">
              <h3>Kantinedrift Nets Skøyen</h3>
              <p>"Jeg har vært så heldig å nyte godt av din matlaging gjennom mange år i jobbsammenheng, og det jeg savner mest ved å bytte arbeidssted er din "signatur" på maten. Du holder høy standard, Carlos! Takk skal du ha."</p>
              <footer>Kåre Gundersen <br>Tidligere ansatt i Nets</footer>
              <img class="nets-logo" src="img/netts.png" alt="nets logo" height="40" />
            </div>
          </div>
          <figure>
            <img src="img/kantine1_skoyen.jpg" alt="Kantine med bord og stoler" />
          </figure>
        </div>
      </section>

      <section class="row">
        <div class="container">
          <div id="recommendation-nets-rommen" class="box right dark">
            <div class="text-wrapper">
              <h3>Kantinedrift Nets Rommen</h3>
              <p>"Jeg kan trygt anbefale Carlos som kokk til både lunsj i kantina, julebord på jobben, til og med på en så stor dag som bryllup kan Carlos imponere og tilfredsstille dine krav og ønsker. Du blir alltid møtt med et smil av en kokk med en inderlig arbeidsmoral og ønske å om gi kundene den beste opplevelsen." </p>
              <footer>Eline Andresen <br> Ansatt i Nets </footer><br>
              <img class="nets-logo" src="img/netts.png" alt="nets logo" height="40" />
            </div>
          </div>
          <figure>
            <img src="img/kantine2_rommen.jpg" alt="Mat på en kantine" />
          </figure>
        </div>
      </section>

    </main>


    <?php
      /* Require the cta part and use fallback cta text */
      require 'parts/cta.php';

      /* Require the footer (and global scripts) */
      require 'parts/footer.php';
    ?>
  </body>
</html>
