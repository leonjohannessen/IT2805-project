/*jshint esversion: 6 */

// Get the main-nav element
const navbar = document.getElementById('main-nav');

// Method that initialize the sticky header
function initializeStickyHeader(){
  // Get the initial navbar position
  const stickyDistance = navbar.offsetTop;

  //
  console.assert(stickyDistance > 0, 'stickyDistance is not positive!');

  // Set state flags
  var isScrolling = false;

  // Method that checks the current scroll position, and updates the navbar
  // state based on the scroll positon
  function updateNavbarState() {
    // get the current scroll position
    const currentScrollPos = window.pageYOffset;

    // get current distance from top of screen to navbar position
    const currentDistanceToNavbar = stickyDistance - currentScrollPos;

    // Boolean that evaluates to true if the user has scrolled past
    // the initial navbar position
    const hasScrolledPastNavBar = currentDistanceToNavbar <= 0;

    // Make the navbar sticky if the user has scrolled past the navbar
    // Note: The sticky class will be "removed" even if it is not there
    // but this has no effect
    if (hasScrolledPastNavBar) {
      navbar.classList.add('sticky');
    } else {
      navbar.classList.remove('sticky');
    }
  }

  // When scrolling, change the scrolling marker flag to true
  window.onscroll = function() {
    isScrolling = true;
  };

  // Check the scrolling marker flag every 25 ms, and update the navbar
  // state if the user is scrolling, to improve performance
  setInterval(function() {
    if (isScrolling) {
      isScrolling = false;
      updateNavbarState();
    }
  }, 25);
}

/* Set up a interval that checks if the user is a desktop user every 1000 ms
 * If the user is on desktop, initialize the sticky header, and stop the interval
 *
 * NOTE: The purpouse of this code is to only load the sticky header javascript
 * if the user is a deskttop user, and also allow for the user to change from
 * a small screen to a big screen without realoding the browser */

const initializeStickyHeaderIntervalID = setInterval(function (){
  // check if the user is on desktop
  const isDesktopUser = window.outerWidth >= 960;

  // Initialize sticky header code if the user is a desktop user,
  // and stop the interval
  if (isDesktopUser) {
    initializeStickyHeader();
    window.clearInterval(initializeStickyHeaderIntervalID);
  }
}, 1000);


// Mobile menu toggler
const navbarToggler = document.getElementById('main-nav-toggler');

var isActive = false;

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

navbarToggler.onclick = toggleNavbar;
