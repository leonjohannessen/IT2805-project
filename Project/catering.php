<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Da Carlo Catering - Catering</title>

    <!-- define viewport to ensure no horizontal scroll -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- include stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- include google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i"rel="stylesheet">

    <!-- page specific styles for catering.html -->
    <link rel="stylesheet" href="css/style-catering.css">

  </head>

  <body>
    <!-- page header and global navigation -->
    <header>
    
      <?php 
        /* Require the header */
        require 'parts/header.php';
      ?>

    </header>

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
            <h3>Meny - Tapas</h3>

            <!-- A tabbed panel showing the different tapas menus provided -->
            <div>
              <ul class="tabPanel">
                <!-- A horizontal list for the Menu titles. The javascript:void(0) is added to tell the javascript to stay on the same page when the link is clicked -->
                <li> <a href="javascript:void(0)" class="panelLinks" onclick="openPanel(event, 'menyTapas1')" id="defaultOpen"> Basic </a> </li>
                <li> <a href="javascript:void(0)" class="panelLinks" onclick="openPanel(event, 'menyTapas2')" > Premium </a> </li>
                <li> <a href="javascript:void(0)" class="panelLinks" onclick="openPanel(event, 'menyTapas3')"> Deluxe </a> </li>
              </ul>
            </div> <br>
            <div id="menyTapas1" class="tabContent">
              <h4> Kalde retter</h4>
              <ul>
                <li>Manchego <small> M, E</small></li>
                <li>Serrano skinke</li>
                <li>Marinerte oliven</li>
                <li>Marinerte artisjokk</li>
                <li>Aioli <small> E </small> </li>
                <li>Salsa</li>
              </ul>

              <h4> Varme retter </h4>
              <ul>
                <li>Ovnsstekte poteter med rosmarin</li>
                <li>Scampi al ajillo<small> M, SK</small></li>
                <li>Albondigas i tomatsaus<small> E, S, HV</small> </li>
                <li>Kylling a la cordobesa</li>
                <li>Ciabatta med urter<small> HV </small></li>
              </ul>
            </div>

            <div id="menyTapas2" class="tabContent">
              <h4> Kalde retter </h4>
              <ul>
                <li>Crostini de verdura<br><small> Ristet brød med grillede marinerte grønnsaker. HV</small></li>
                <li>Manchego<small> M, E</small></li>
                <li>Serrano skinke</li>
                <li>Marinerte oliven</li>
                <li>Caprese <br><small> Tomater, mozarella, basilikum, olivenolje. M</small></li>
                <li>Ensalada de Mediterraneo <br><small>Oliven, tomat, agurk, fetaost, salat og tzatziki. M</small></li>
                <li>Focaccia med urter <small> HV </small></li>
                <li>Aioli<small> E </small></li>
                <li>Salsa</li>
              </ul>

              <h4> Varme retter </h4>
              <ul>
                <li>Ovnsstekte poteter med rosmarin</li>
                <li>Scampi med hummersaus<small> M, SK</small></li>
                <li>Albondigas i rødvinsaus<small> E, S, HV</small></li>
                <li>Kylling a la cordobesa</li>
                <li>Paella<small> F SK </small></li>
                <li>Spansk omelett<small> E</small></li>
              </ul>
            </div>

            <div id="menyTapas3" class="tabContent">
              <h4> Kalde retter </h4>
              <ul>
                <li>Manchego<small> M,E </small></li>
                <li>Serrano skinke</li>
                <li>Asorterte oliven med hvitløk og oregano</li>
                <li>Marinerte artisjokk</li>
                <li>Aioli<small>E </small></li>
                <li>Pebre <br><small> Tomatsalsa fra Chile med hvitløk, chili, koriander, løk og lime</small></li>
                <li>Bruchetta med tomat og pesto <small> HV, P, M</small></li>
                <li>Caprese <br><small> Tomater, mozarella, basilikum, olivenolje. M </small></li>
                <li>Ensalada de pollo<small> M</small></li>
                <li>Ciabatta med urter<small> HV</small></li>
              </ul>

              <h4> Varme retter </h4>
              <ul>
                <li>Chorizos</li>
                <li>Pannestekte kamskjell med hvitløk og timian</li>
                <li>Ovnsstekte poteter med rosmarin</li>
                <li>Scampi med hummersaus<small> M, SK </small></li>
                <li>Albondigas i rødvinsaus<small> E, S, HV </small></li>
                <li>Kylling a la cordobesa</li>
                <li>Paella <small>F SK </small></li>
                <li>Chilenske empanadas med kjøttdeig eller ost <small> M, E, HV </small></li>
              </ul>
            </div>
          <h5> ALLERGIER: </h5>
          <p> <small> HV: hvete. SK: skalldyr. F: fisk. M: melk og laktose. Bl: bløtdyr. <br> SO: soya. P: peanøtter. E: egg. SF: sesamfrø. SE: sennep. MA: mandler. </small></p>
          </div>
        </div>
      </div>
    </section>

    <section class="row menu">
      <div class="container">
        <div class="box full tight">
          <div class="text-wrapper">
            <h3>Meny - treretters </h3>

            <!-- A tabbed panel showing the different three course dinners provided -->
            <div>
              <ul class="tabPanel">
                <!-- A horizontal list for the Menu titles. The javascript:void(0) is added to tell the javascript to stay on the same page when the link is clicked -->
                <li> <a href="javascript:void(0)" class="panelLinks" onclick="openPanel(event, 'meny1')"> Meny 1 </a> </li>
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
              <p class="menuNorskForklaring"> Lammecarret med rødvinssaus, glaserte grønnsaker og fløtegratinerte poteter </p>
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
              <p class="menuNorskForklaring"> Ytrefilet servert med parmasan, ruccolasalat, olivenolje og sitron</p>
              <p><small> Inneholder melk og laktose</small></p>

              <h4> Hovedrett </h4>
              <p> Baccalao en salsa verde y papas panaderas </p>
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
              <p class="menuNorskForklaringForklaring"> Scampi med hvitløk, persille og chili servert med godt brød </p>
              <p><small> Inneholder skalldyr </small> </p>

              <h4> Hovedrett </h4>
              <p> Filete de ternera con salsa vino de porto </p>
              <p class="menuNorskForklaring"> Kalvefilet med portvinsaus, glaserte grønnsaker og ovnsstekte poteter </p>

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
        <div class="box full dark tight">
          <div class="text-wrapper">
            <h4> Nedlastbar meny </h4>
            <p id="download"> Hvis du ønsker å printe menyene, kan du laste dem ned her: </p>
            <a href="#" class="button" id="buttonDownload">
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

    <!-- call to action -->
    <section class="cta">
      <div class="container">
        <p>Ta kontakt for et uforpliktende tilbud. Vi vil i samarbeid og dialog finne den beste løsningen for ditt behov. </p>
        <a href="kontakt.html" class="button" style="float: right; display=inline;">Kontakt oss</a>
            <p style="font-size: 1.8rem; display=inline;">+47 428 83 247</p>
          <p style="font-size=1rem;"><a href="mailto:epost@epost.no">epost</a>
          </p>
      </div>
    </section>

    <!-- page footer -->
    <footer>
      <div class="container">
        <img src="img/dacarlo_logo.png" alt="logo" class="smallLogo">
        <p id="footerCopyright">2016 © Da Carlo Catering</p>
      </div>
    </footer>

    <!-- include javascript files -->
    <script src="js/sticky-header.js"></script>
    <script src="js/mobile-menu-toggler.js"></script>

    <!-- include page specific javascript files -->
    <script src="js/menu-panel.js"></script>
  </body>
</html>
