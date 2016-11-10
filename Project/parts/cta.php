<?php 
/* 
 * File name: parts/cta.php
 * Author: Leon Johannessen
 * Date: November 2016
 *
 * PHP file for the call to action element on the bottom of each dacarlo.no page.
 * The text variable is set by the page that includes the cta part.
 *
 * NOTE: indentation in this file is strange to preserve
 * correct indentation in the processed HTML 
 */ 

// Fallback text if the cta-text is not set by the file that includes it
if (!isset($cta_text)) {
  $cta_text = 'Ta kontakt for et uforpliktende tilbud.';
}

?>

    <!-- call to action -->
    <section class="cta">
      <div class="container">
        <p><?php echo $cta_text; ?></p>
        <a href="kontakt.php" class="button right">Kontakt oss</a>
        <p class="phone">+47 428 83 247</p>
        <p class="email">
			<a href="mailto:juanpequeno@gmail.com">juanpequeno@gmail.com</a>
        </p> 
      </div>
    </section>
