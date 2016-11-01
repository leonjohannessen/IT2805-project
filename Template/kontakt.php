<?php

if($_POST["submit"]) {
    $recipient="kristinerisefry@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["Email"];
    $message=$_POST["extraInfo"];

    $mailBody="Name: $name\nEmail: $email\nTelefon: $number\n $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kontakt oss</title>

    <!-- define viewport to ensure no horizontal scroll -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- include stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_kontakt.css">

    <!-- include google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i"rel="stylesheet">

  </head>

  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

  <body>

    <!-- page header and global navigation -->
    <header>
      <!-- logo -->
      <h1 id="logo">Da Carlo Catering</h1>
      <div id="main-nav-toggler">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav id="main-nav">
        <ul>
          <li><a class="active" href="#">Hjem</a></li>
          <li><a href="#">Catering</a></li>
          <li><a href="#">Kantine</a></li>
          <li><a href="#">Om</a></li>
          <li><a href="#">Kontakt</a></li>
        </ul>
      </nav>
    </header>

    <!-- page content -->
    <main>
      <section class="intro">
        <div class="container">
            <div class="text-wrapper">

                <h2>Kontakt</h2>
                <p id="introtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <div class="right">
                  <p class="phone">
                    +47 428 83 247
                  </p>
                  <p class="mailto">
                    <a href="mailto:epost@epost.no">epost</a>
                  </p>

              </div>
            </div>
              <div class="left">
                <img id="handskrift" src="img/marlene.png" alt="">
                <br><br><br><p>Hilsen Juan Carlos Pequeno</p>
              </div>
        </div>
      </section>
      <section class="row">
        <div class="container">
          <div class="box full dark">
            <div class="text-wrapper">
              <h3>Be om pristilbud</h3>
              <p>Hva ønsker du pristilbud på?</p>

              <a href="#" class="button left">Cateringtjenester</a>
              <a href="#" class="button right">Kantinedrift</a>

              <h3>Om arrangementet</h3>
              <p>Da Carlo kan levere cateringtjenester til alle typer arrangementer. Fortell oss litt mer om hva du ønsker hjelp til.</p>
              <form method="post" action= "kontakt.php">
                <input type="text" id="place" name="sted" value="Sted"/>
                <label for="place">Sted</label>

                <input class="right" type="date" id="date" name="dato" value="Dato"/>
                <label for="date">Dato</label>

                <input type="text" id="guestNo" name="antallGjester" value="Antall gjester"/>
                <label for="guestNo">Antall Gjester</label>

              <div class="styledSelect">
                <select  id="meny" name="meny" value="Ønsket meny">
                  <option value="meny1">Meny 1</option>
                  <option value="meny2">Meny 2</option>
                  <option value="meny3">Meny 3</option>
                </select>
                <label for="meny">Ønsket meny</label>
              </div>

                <textarea id="info" name="extraInfo"/>Ekstra informasjon og eventuelle spørsmål</textarea>

                <h3>Om deg</h3>
                <p>Legg igjen din kontaktinformasjon, så tar vi kontakt så snart som mulig.</p>
                <input type="text" id="name" name="navn"value="Ditt navn"/>
                <label for="name">Ditt navn</label>

                <input type="tel" id="number" name="telefonnummer" value="Ditt telefonnummer"/>
                <label for="number">Ditt telefonnummer</label>

                <input type="email" id="email" name="epost" value="Din e-postadresse"/>
                <label for="email">Din e-postadresse</label>

                <div class="midstiltKnapp">
                <a id="send" href="#" name="submit" class="button wide">Send prisforespørsel</a>
                </div>
              </form>

            </div>
          </div>
      </div>
    </div>
    </section>

    </main>


    <!-- page footer -->
    <footer>
      <object name="footer" type="text/html" data="footer.inc"> </object>
    </footer>

    <!-- include javascript files in end of body, so we don't have to care
         about cross browser dom-ready crap -->
    <script src="js/sticky-header.js"></script>
  </body>
</html>
