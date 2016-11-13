<!--

WRITTEN BY: Linn Harbo Dahle

WHEN: October 2016

PURPOSE: Information about the menus provided to catering service is provided

-->
<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8">
    <title>Da Carlo Catering - Catering</title>

    <?php
      /* Require the common head elements */
      require 'parts/head.php';
    ?>

    <!-- page specific styles for catering.html -->
    <link rel="stylesheet" href="css/style-catering.css">

  </head>

  <body>
    <!-- page header and global navigation -->
    <header>

      <?php
        /* Require the header and set the active page */
        $active = 'catering';
        require 'parts/navbar.php';
      ?>

    </header>

    <!-- background image -->
    <div id="background-image">
      <img src="img/header-images/header-catering.jpg" alt="catering">
    </div>

    <main>
      <section class="intro">
        <div class="container">
          <h2>Catering </h2>
          <p>
            Vi leverer personlig service og individuell tilpasning. Kokkene som
            gjør avtale med deg, er også de som lager maten og følger den helt
            frem til lokalet der maten presenteres for gjestene. På denne måten
            sikrer vi at dine ønsker og preferanser ivaretas på en god måte.
          </p>
          <p>
            Vi bruker kun råvarer av topp kvalitet og tilbereder dem på beste
            måte med vår erfaring fra det latinske kjøkkenet. Se om en av menyene
            for tapas eller treretters frister, men vær oppmerksom på at menyene
            kan skreddersys til din preferanse.
          </p>
        </div>
      </section>
    </main>

    <section class="row menu">
      <div class="container">
        <div class="box full dark tight">
          <div class="text-wrapper">
            <h3>Meny - treretters </h3>

            <!-- A tabbed panel showing the different three course dinners provided -->
            <div>
              <ul class="tabPanel">
                <!-- A horizontal list for the Menu titles. The javascript:void(0) is added to tell the javascript to stay on the same page when the link is clicked -->
                <li> <a href="javascript:void(0)" class="panelLinks" onclick="openPanel(event, 'meny1')" id="defaultOpen"> Meny 1 </a> </li>
                <li> <a href="javascript:void(0)" class="panelLinks" onclick="openPanel(event, 'meny2')" > Meny 2 </a> </li>
                <li> <a href="javascript:void(0)" class="panelLinks" onclick="openPanel(event, 'meny3')"> Meny 3 </a> </li>
              </ul>
            </div> <br>
            <div id="meny1" class="tabContent">
              <h4> Forrett </h4>
              <p> Jamon gratinado de ajo con gambas </p>
              <p class="menuNorskForklaring"> Hvitløksgratinert spekeskinke med reker</p>
              <p><small> Inneholder fisk, melk og laktose</small> </p>

              <h4> Hovedrett </h4>
              <p> Lomo de cordero al horno </p>
              <p class="menuNorskForklaring"> Lammecarre med rødvinssaus, glaserte grønnsaker og fløtegratinerte poteter </p>
              <p><small> Inneholder melk og laktose</small> </p>

              <h4> Dessert </h4>
              <h5> Velg blant en av disse: </h5>
              <ul class="dessert">
                <li>Pannacotta med bringebærsaus<br><small> Inneholder melk og laktose</small></li>
                <li>Creme catalana<br><small> Inneholder melk, laktose og egg</small></li>
                <li>Sjokoladefondant<br><small> Inneholder melk, laktose, egg, hvete og soya</small></li>
                <li>Tiramisu <br><small> Inneholder melk, laktose, egg og hvete </small> </li>
              </ul>
            </div>

            <div id="meny2" class="tabContent">
              <h4> Forrett </h4>
              <p> Carpaccio </p>
              <p class="menuNorskForklaring"> Ytrefilet servert med parmesan, ruccolasalat, olivenolje og sitron</p>
              <p><small> Inneholder melk og laktose</small></p>

              <h4> Hovedrett </h4>
              <p> Bacalao en salsa verde y papas panaderas </p>
              <p class="menuNorskForklaring"> Baccalao med grønn saus og poteter stekt med løk, hvitløk, olivenolje og hvitvin </p>
              <p><small> Inneholder fisk</small></p>

              <h4> Dessert </h4>
              <h5> Velg blant en av disse: </h5>
              <ul class="dessert">
                <li>Pannacotta med bringebærsaus<br><small> Inneholder melk og laktose</small></li>
                <li>Creme catalana<br><small> Inneholder melk, laktose og egg</small></li>
                <li>Sjokoladefondant<br><small> Inneholder melk, laktose, egg, hvete og soya</small></li>
                <li>Tiramisu <br><small> Inneholder melk, laktose, egg og hvete </small> </li>
              </ul>
            </div>

            <div id="meny3" class="tabContent">
              <h4> Forrett </h4>
              <p> Gambas al ajillo </p>
              <p class="menuNorskForklaring"> Scampi med hvitløk, persille og chili servert med godt brød </p>
              <p><small> Inneholder skalldyr </small> </p>

              <h4> Hovedrett </h4>
              <p> Filete de ternera con salsa vino de porto </p>
              <p class="menuNorskForklaring"> Kalvefilet med portvinsaus, glaserte grønnsaker og ovnstekte poteter </p>

              <h4> Dessert </h4>
              <h5> Velg blant en av disse: </h5>
              <ul class="dessert">
                <li>Pannacotta med bringebærsaus<br><small> Inneholder melk og laktose</small></li>
                <li>Creme catalana<br><small> Inneholder melk, laktose og egg</small></li>
                <li>Sjokoladefondant<br><small> Inneholder melk, laktose, egg, hvete og soya</small></li>
                <li>Tiramisu <br><small> Inneholder melk, laktose, egg og hvete </small> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="row">
      <div class="container">
        <div class="box full tight">
          <div class="text-wrapper">
            <h4> Nedlastbar meny </h4>
            <p id="download"> Hvis du ønsker å printe menyene, kan du laste dem ned her: </p>
            <a href="files/dacarlo-menu.pdf" target="_blank" class="button" id="buttonDownload">
              <!-- An svg icon inside the button-->
              <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                  <path d="M0 0h24v24H0z" fill="none"/>
              </svg>
              Last ned PDF </a>
              <br>
          </div>
        </div>
      </div>
    </section>

    <!--Quotes from customers-->
    <section class="row">
      <div class="container">
        <div class="box right tight blue">
          <div class="text-wrapper">
            <blockquote>
              <p>
                De leverer alltid meget god mat, gode råd for sammensetting av
                retter og hyggelig service. Anbefaler Da Carlo Catering på det
                varmeste!
              </p>
              <footer>Christian Lilloe Salvesen <br> Bestilt mat til konfirmasjoner og 50-årsdag</footer>
            </blockquote> <br> <br>
          </div>
        </div>
      </div>
    </section>

    <section class="row lastRow">
      <div class="container cateringQuote">
        <div class="box left tight">
          <div class="text-wrapper">
            <blockquote>
              <p>Anbefales på det sterkeste. Jeg er spesielt glad i blåskjellsuppen, paellaen og scampisausen. Han lager også verdens beste salsadipp og foccacia. </p>
              <footer>Amie Secka</footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <?php
      /* Require the cta part and set cta text */
      $cta_text = 'Ta kontakt for et uforpliktende tilbud. Vi vil i samarbeid og dialog finne den beste løsningen for ditt behov.';
      require 'parts/cta.php';

      /* Require the footer (and global scripts) */
      require 'parts/footer.php';
    ?>

    <!-- include page specific javascript files -->
    <script src="js/menu-panel.js"></script>
  </body>
</html>
