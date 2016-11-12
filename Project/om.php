<!--

WRITTEN BY: Maia Elisabeth Sirnes

WHEN: November 2016

PURPOSE: provide information about Da Carlo, their chefs and waitors

-->

<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8">
    <title>Om Da Carlo</title>

    <?php
      /* Require the common head elements */
      require 'parts/head.php';
    ?>

    <!-- page specific styles for om.html -->
    <link rel="stylesheet" href="css/style-om.css">

  </head>

  <body>

    <!-- page header and global navigation -->
    <header>

      <?php
        /* Require the header and set the active page */
        $active = 'om';
        require 'parts/navbar.php';
      ?>

    </header>

    <!-- background image -->
    <div id="background-image">
      <img src="img/header-images/header-om.jpg" alt="om oss">
    </div>

    <!-- page content -->
    <main>
      <section class="intro">
        <div class="container">
          <h2>Om Da Carlo</h2>
          <p>
            God mat gir en ekstra dimensjon til alle møter mellom mennesker, om det er i kantina på jobben, store høytidsdager eller uformelle firmafester.
            Vi har samlet de beste smakene fra det italienske, spanske og latinamerikanske kjøkkenet og ønsker å tilby spennende og minneverdige smaksopplevelser tilpasset dere.
            Da Carlo leverer tapas eller individuelt tilpassede menyer til enhver anledning i Oslo og omegn. Vi har i tillegg knyttet til oss dyktige servitører representert ved Camilla, som kan tilføre din sammenkomst et ekstra løft.
            Da Carlo stiller og med bartender med lang erfaring innen bransjen ved behov.
            Da Carlo har flere års erfaring med drift av kantiner og har gode referanser å vise til. Ta kontakt dersom dere ønsker kantinemat som gir arbeidsdagen et løft!
          </p></div>
      </section>

      <section class="row">
        <div class="container" id="juan">
          <div class="box left">
            <div class="text-wrapper">
              <h3>Juan Carlos</h3>
              <p> Fra min oppvekst ved Chiles langstrakte kyst har jeg lært meg å verdsette havets mangfoldige variasjon av delikatesser. Da jeg var liten opplevde jeg hvordan min mor tryllet frem de herligste smaker fra enkle basisråvarer i det chilenske kjøkkenet.
                  Dette har jeg brakt med meg til Norge, hvor jeg har jobbet mange år i restaurantbransjen og nå de siste 10 årene med drift av Nets, Teller og Visa sine kantiner i Oslo.
              </p>
              <div>
                <blockquote>
                  <p>Vi gleder oss til å servere dere et smakfullt måltid basert på de beste råvarer, vår kulturbakgrunn, deres ønsker og med all vår kunnskap og erfaring! Buen provecho! </p>
                </blockquote>
              </div>
            </div>
          </div>
          <figure>
            <img src="img/lmh-kokker11.jpg" alt="Juan Carlos profilbilde" />
          </figure>
        </div>
      </section>

      <section class="row" >
        <div class="container" id="cecare">
          <div class="box right dark">
            <div class="text-wrapper">
              <h3>Cesare</h3>
              <p>
                Jeg vokste opp i en liten landsby ved Toscanas kyst med foreldre som opprinnelig kommer fra Sardinia. På den måten har jeg tilegnet meg matkultur fra to viktige tradisjoner innen det italienske kjøkkenet. I flere generasjoner har familien min drevet med jordbruk, husdyrhold og produksjon av meiriprodukter.
                Fra disse erfaringene kommer kunnskapen jeg har om gode råvarer og foredlingen av disse.
                Etter at jeg kom til Norge i 2002, har jeg i mange år jobbet på kjøkkenet hos San Lorenzo i Vika, en italiensk restaurant og pizzeria der jeg utvidet min kunnskap om tradisjonelle matretter fra flere regioner i Italia.
              </p>
              <div>
                <blockquote>
                  <p>Det er det jeg elsker å gjøre: lage ekte italiensk mat med tradisjoner tilbake til antikkens Roma!</p>
                </blockquote>
              </div>
            </div>
          </div>
          <figure>
            <img src="img/lmh-kokker13.jpg" alt="Cesare profilbilde" />
          </figure>
        </div>
      </section>

      <section class="row">
        <div class="container"  id="roberto">
          <div class="box left">
            <div class="text-wrapper">
              <h3>Roberto</h3>
              <p>
                I 20 år har jeg reist gjennom Spania både gastronomisk og geografisk. På min reise har jeg blitt kjent med de ulike regionene som er bærere av stolte mattradisjoner, fra Valencia med sin paella til Baskerland med sine berømte fiskeretter.
                Jeg har vært heldig og blitt innviet i kulinariske hemmeligheter på min vei! I 2008 kom jeg til Oslo og jobbet som kokk på en av Oslos største tapasrestauranter og var med å sette standard for god iberisk mat i hovedstaden.
              </p>
                <div>
                <blockquote>
                  <p>Med min kunnskap og erfaringer vil jeg bidra til at Da Carlo leverer mat av ypperste klasse </p>
                </blockquote>
              </div>
            </div>
          </div>
          <figure>
            <img src="img/lmh-kokker12.jpg" alt="Roberto profilbilde" />
          </figure>
        </div>
      </section>

      <section class="row" >
        <div class="container" id="camilla">
          <div class="box right blue">
            <div class="text-wrapper">
              <h3>Camilla</h3>
              <p>
                Camilla er faglært servitør og sommelier og har jobbet 10 år i restaurantbransjen i København og Oslo.
                Hun og hennes kollegaer vil ivareta alle gjestene på en utmerket måte.
                Interesse for mat og vin har Camilla arvet fra sine besteforeldre i Chile, og hun bidrar gjerne med valg av vin til maten ved behov.
              </p>
            </div>
          </div>
          <figure>
            <img src="img/lmh-servitor.jpg" alt="Servitør profilbilde" />
          </figure>
        </div>
      </section>
    </main>

    <?php
      /* Require the cta part and set cta text */
      $cta_text = 'Trenger du en dyktig og erfaren kokk med gode referanser til firmaets kantine, ta kontakt.';
      require 'parts/cta.php';

      /* Require the footer (and global scripts) */
      require 'parts/footer.php';
    ?>
  </body>
</html>
