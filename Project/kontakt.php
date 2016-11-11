<!--

WRITTEN BY: Maia Elisabeth Sirnes

WHEN: November 2016

PURPOSE: provide a channel of contact between potential customers and Da Carlo

-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Da Carlo Catering - Kontakt oss</title>

    <?php
      /* Require the common head elements */
      require 'parts/head.php';
    ?>

    <!-- page specific styles for kontakt.html -->
    <link rel="stylesheet" href="css/style-kontakt.css">

  </head>

  <body>

    <!-- page header and global navigation -->
    <header>

      <?php
        /* Require the header and set the active page */
        $active = 'kontakt';
        require 'parts/navbar.php';
      ?>

    </header>

    <!-- page content -->
    <main>
      <section class="intro">
        <div class="container">
          <div class="text-wrapper">
            <h2>Kontakt</h2>

              <p id="introtext">
                Ikke nøl med å ta kontakt for en uforpliktende samtale der vi ser om vi kan imøtekomme dine behov og preferanser.
                Vårt mål er å gjøre din sammenkomst til en minneverdig og genuin smaksopplevelse med en latinsk signatur.
                Trenger du en dyktig og erfaren kokk med gode referanser til firmaets kantine, ta kontakt!
              </p>
              <div class="right">
                <p class="phone">+47 472 84 866</p>
                <p class="mailto">
                  <a href="mailto:juanpequeno@gmail.com">juanpequeno@gmail.com</a>
                </p>
              </div>
            </div>
            <div id="signature-wrapper">
              <p>Hilsen Juan Carlos Pequeno</p>
              <img id="signature" src="img/signature_carlos2.png" alt="Signaturen til Carlos">
            </div>
        </div>
      </section>

      <section class="row">
        <div class="container">
          <div class="box full dark">
            <div class="text-wrapper">
              <h3>Be om pristilbud</h3>
              <p>Hva ønsker du pristilbud på?</p>

              <!-- NOTE: KNAPPER -->
              <!-- Tab panel buttons, select customer type -->
              <div class="btn-wrapper">
                <a href="javascript:void(0)" class="panelLinks button left" onclick="openPanel(event, 'catering')" id="defaultOpen"> Cateringtjenester </a>
                <a href="javascript:void(0)" class="panelLinks button right" onclick="openPanel(event, 'canteen')"> Kantinedrift </a>
              </div>

              <!-- form for catering customer -->
              <div id="catering" class="tabContent">
                <h3>Om arrangementet</h3>
                <p>Da Carlo kan levere cateringtjenester til alle typer arrangementer. </p>

                <form name="catering" onsubmit="return submitInfoCatering(event)">
                  <input id="date" class="right" type="date" name="dato" placeholder="Dato" required/>
                  <label for="dato">Dato</label>

                  <input id="place" type="text" name="adresse" placeholder="Adresse" />
                  <label for="adresse">Adresse</label>

                  <input id="guestNo" type="text" name="antallGjester" placeholder="Antall gjester" required/>
                  <label for="antallGjester">Antall Gjester</label>

                  <div class="styledSelect">
                    <select  id="meny" name="meny" value="Ønsket meny" required>
                      <!--Drop down menu-->
                      <option value="" disabled selected>Velg din meny</option>
                      <option value="meny1">Meny 1</option>
                      <option value="meny2">Meny 2</option>
                      <option value="meny3">Meny 3</option>
                    </select>
                  </div>

                  <textarea id="cateringInfo" name="extraInfo" placeholder="Fortell oss om ditt arrangement" ></textarea>

                  <h3>Om deg</h3>
                  <p>Legg igjen din kontaktinformasjon, så tar vi kontakt så snart som mulig.</p>
                  <input type="text" id="name" name="navn" placeholder="Ditt navn" required/>
                  <label for="name">Ditt navn</label>

                  <input type="tel" id="number" name="telefonnummer" placeholder="Ditt telefonnummer" required/>
                  <label for="number">Ditt telefonnummer</label>

                  <input type="email" id="email" name="epost" placeholder="Din e-postadresse" required/>
                  <label for="email">Din e-postadresse</label>

                  <!-- SUBMIT Catering form - BUTTON -->
                  <input type= "submit" name="submit" id="btnSubmitCatering" class="submitButtons" value ="Send prisforespørsel" />
                  <p id='feedbackCatering' hidden> <br>Din forespørsel er sendt, takk for din interesse!<br> </p>

                </form>
              </div>

              <!-- form for canteen customer -->
              <div id="canteen" class="tabContent">
                <h3>Om bedriften</h3>
                <p>Da Carlo har mange års erfaring med kantinedrift. Fortell oss litt mer om din bedrift og hva du ønsker hjelp til.</p>
                <form name="canteen" onsubmit="return submitInfoCanteen(event)">
                  <input id="companyName" type="text" name="bedriftsNavn" placeholder="Bedriftens navn" required/>
                  <label for="bedriftsNavn">Bedriftens navn</label>

                  <input id="companyPlace" class="left" type="text" name="bedriftsAdresse" placeholder="Adresse" />
                  <label for="bedriftsAdresse">Adresse</label>

                  <input id="emplNo" class="right" type="text" name="antallAnsatte" placeholder="Antall ansatte" required/>
                  <label for="antallAnsatte">Antall ansatte</label>

                  <textarea id="canteenInfo" name="ekstraInfo" placeholder="Hva slags kantinedrift ønsker dere?"></textarea>

                  <!-- TODO: remove duplicate person info code -->
                  <h3>Om deg</h3>
                  <p>Legg igjen din kontaktinformasjon, så tar vi kontakt så snart som mulig.</p>
                  <input type="text" id="name" name="navn" placeholder="Ditt navn" required/>
                  <label for="name">Ditt navn</label>

                  <input type="tel" id="number" name="telefonnummer" placeholder="Ditt telefonnummer" required/>
                  <label for="number">Ditt telefonnummer</label>

                  <input type="email" id="email" name="epost" placeholder="Din e-postadresse" required/>
                  <label for="email">Din e-postadresse</label>

                  <!-- SUBMIT Canteen form - BUTTON -->
                  <input type= "submit" name="submit" id="btnSubmitCanteen" class="submitButtons" value ="Send prisforespørsel" />
                  <p id='feedbackCanteen' hidden> <br>Din forespørsel er sendt, takk for din interesse!<br> </p>
                </form>
              </div>

            </div>
          </div>
        </div>
      </section>
    </main>

    <?php
      /* Require the footer (and global scripts) */
      require 'parts/footer.php';
    ?>

    <!-- Page specific scripts -->
    <script src="js/menu-panel.js"></script>
    <script src="js/submitInfo.js"></script>
    <script>

    // Onclick function for submit-button: Gives the user feedback on that the form has been sent
      function submitInfoCatering(event){
        //prevents the view to jump up
        event.preventDefault();
        //Displays a feedback message
        document.getElementById('feedbackCatering').style.visibility = "display";
        document.getElementById('feedbackCatering').style.display = "block";
        document.getElementById('btnSubmitCatering').style.display = "none";
        return false;
      }

      function submitInfoCanteen(event){
        event.preventDefault();
        //Displays a feedback message
        document.getElementById('feedbackCanteen').style.visibility = "display";
        document.getElementById('feedbackCanteen').style.display = "block";
        document.getElementById('btnSubmitCanteen').style.display = "none";
        return false;
      }

    </script>
  </body>
</html>
