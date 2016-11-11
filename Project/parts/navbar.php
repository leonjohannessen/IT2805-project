<?php 
/* 
 * File name: parts/navbar.php
 * Author: Leon Johannessen
 * Date: November 2016
 *
 * PHP file for the logo and navbar, included on every page of dacarlo.no.
 * The active variable value is set by the page that includes the header.
 *
 * NOTE: indentation in this file is strange to preserve
 * correct indentation in the processed HTML 
 */ 
 ?>

      <!-- logo -->
      <h1 id="logo">Da Carlo Catering</h1>

      <!-- navigation -->
      <div id="main-nav-toggler">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav id="main-nav">
        <ul>
          <li><a <?php echo ($active == "index") ? 'class="active" ' : ''; ?>href="index.php">Hjem</a></li>
          <li><a <?php echo ($active == "catering") ? 'class="active" ' : ''; ?>href="catering.php">Catering</a></li>
          <li><a <?php echo ($active == "kantine") ? 'class="active" ' : ''; ?>href="kantine.php">Kantine</a></li>
          <li><a <?php echo ($active == "om") ? 'class="active" ' : ''; ?>href="om.php">Om</a></li>
          <li><a <?php echo ($active == "kontakt") ? 'class="active" ' : ''; ?>href="kontakt.php">Kontakt</a></li>
        </ul>
      </nav>
