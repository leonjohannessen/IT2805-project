/* ========================================
 *
 * File name: js/mobile-menu-toggler.js
 * Author: leonkj@stud.ntnu.no
 * Date: September 2016
 *
 * JavaScript file for dacarlo.no that toggles the navigation menu on mobile
 * devices. The toggle element is hidden with css on larger screens, and
 * this script is therefore only called by mobile users.
 *
 * ======================================== */

// Get a constant reference to the navbar-toggler-element
const navbarToggler = document.getElementById('main-nav-toggler');

// Declare the isActive-flag. By default the menu is not active
var isActive = false;

// Function that toggles the navbar by adding or removing css classes
function toggleNavbar() {
  if (!isActive) {
    navbar.classList.add('toggled');
    navbarToggler.classList.add('active');
  } else {
    navbar.classList.remove('toggled');
    navbarToggler.classList.remove('active');
  }
  isActive = !isActive;
}

// Call the toggleNavbar function when an onclick event is
// fired from the navbarToggler-element
navbarToggler.onclick = toggleNavbar;
