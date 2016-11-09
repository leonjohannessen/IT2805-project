<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Da Carlo Catering - Kantine</title>

    <!-- define viewport to ensure no horizontal scroll -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- include stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- include google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i"rel="stylesheet">

    <!-- page specific styles for kantine.html -->
    <link rel="stylesheet" href="css/style-kantine.css">

  </head>
  <script>

  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')

  </script>

  <body>

    <!-- page header and global navigation -->
    <header>

      <?php 
        /* Require the header */
        require 'parts/header.php';
      ?>

    </header>

    <!-- page content -->
    <main>
      <section class="intro">
        <div class="container">
          <div id="text-wrapper">
            <h2>Kantine</h2>
            <p id= "introtext">Hva har du lyst på til lunsj idag? Våre kokker har lang erfaring innen kantinedrift, matservering til møter og matservering ved ulike arrangement. Vår målsetning er å servere variert, sunn og delikat mat basert på gode råvarer. Vi ønsker i tillegg at den latinske matkulturen vi bærer med oss, kan sette preg på maten som serveres og ved å ha evnen til å improvisere vil vi kunne tilby et vidt spekter av retter.
            </p>
            <p>
              Vi ønsker å tilby et variert og spennende mattilbud gjennom planlagte konsepter. I kantina skal gjestene innta et godt måltid og oppleve at vi tilstreber å dekke flest mulig smaksretninger og behov. Gode råvarer, fokus på ernæring og respekt for årstidens variasjon er i den sammenheng viktig. De bærende elementene i kantinedriften kan feks være salatbuffet, varmmat, brød buffet, påsmurt mat og i tillegg temadager.
            </p>
            <p>
              Hver bedrift har sine ulike behov og vi i Da Carlo er opptatt av et aktivt samarbeid for å finne frem til gode løsninger og skreddersy et konsept som kan imøtekomme akkurat deres ønsker og preferanser. Ta kontakt for nærmere informasjon. Vi er en samarbeidspartner du kan stole på.

            </p>
          </div>
        </div>

      </section>

      <section class="row">
        <div class="container">
          <div class="box left">
            <div class="text-wrapper">
              <h3>Kantinedrift for Nets AS</h3>
              <p>Jeg har vært så heldig å nyte godt av din matlaging gjennom mange år i jobbsammenheng, og det jeg savner mest ved å bytte arbeidssted er din "signatur" på maten.
              Du holder høy standard, Carlos! Takk skal du ha.
              </p>
              <footer><br>
                Kåre Gundersen <br>
                Nets AS
              </footer>
              <img id= "nets-logo" src="img/netts.png" alt="" height="30px" /></br>
              <a href="#" class="button">Se vår cateringmeny</a>
            </div>
          </div>
          <figure>
            <img src="img/lmh-kokker11.jpg" alt="" />
          </figure>
          <div class="box right tight blue">
            <div class="text-wrapper">
              <blockquote cite="http://nets.no">
                <p>Da Carlo leverer ikke bare mat, men en opplevelse!</p>
                <footer>Marie Nelsvik, i Nets strømmen</footer>
              </blockquote>
            </div>
          </div>
        </div>
      </section>

      <section class="row">
        <div class="container">
          <div class="box left dark">
            <div class="text-wrapper">
              <h3>Kantinedrift for HVEM????</h3>
              <p>Jeg kan trygt anbefale Carlos som kokk til både lunsj i kantina, julebord på jobben, til og med på en så stor dag som bryllup kan Carlos imponere og tilfredsstille dine krav og ønsker.
                Du blir alltid møtt med et smil av en kokk med en inderlig arbeidsmoral og ønske å om gi kundene den beste opplevelsen. </p><br>
                <footer>Eline Andresen</footer><br>

              <a href="#" class="button">Se vår kantinemeny</a>
            </div>
          </div>
          <figure>
            <img src="img/lmh-kokker12.jpg" alt="" />
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



    <!-- include javascript files in end of body, so we don't have to care
         about cross browser dom-ready crap -->
    <script src="js/sticky-header.js"></script>
  </body>
</html>