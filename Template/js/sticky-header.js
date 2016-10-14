// Get the main-nav element
const navbar = document.getElementById('main-nav');

// Get the initial navbar position
const stickyDistance = getDistance();

// Set state flags
var sticky = false;
var scrolling = false;

// Helper method to get distance from top to navbar
function getDistance() {
  return navbar.offsetTop;
}

// Method that checks the current scroll position, and updates the navbar
// state based on the scroll positon
function updateNavbarState() {
  // switch the "scrolling"-flag
  scrolling = !scrolling;

  // get the current scroll position
  var currentScrollPos = window.pageYOffset;

  // get current distance from top of screen to navbar position
  var currentDistance = getDistance() - currentScrollPos;

  if ((currentDistance <= 0) && !sticky) {
    // if the user has scroleld past the navbar, and the navbar is not sticky,
    // add the sticky class to it and flip the sticky flag
    navbar.classList.add('sticky');
    sticky = !sticky;
  } else if ((currentScrollPos <= stickyDistance) && sticky) {
    // if the user has scrolled back and past the initial navbar position, and
    // the navbar is sticky, remove the sticky class and flip the sticky flag
    navbar.classList.remove('sticky');
    sticky = !sticky;
  }
}

// If scrolling, switch the scrolling flag and wait 100 ms (improves performance)
setInterval(function() {
  if(scrolling) {
    scrolling = !scrolling;
  }
}, 1000);

// When scrolling, update the navbar state
window.onscroll = updateNavbarState;

// Mobile menu toggler
const navbarToggler = document.getElementById('main-nav-toggler');

var toggled = false;

function toggleNavbar() {
  if (!toggled) {
    navbar.classList.add('toggled');
    navbarToggler.classList.add('active');
  } else {
    navbar.classList.remove('toggled');
    navbarToggler.classList.remove('active');
  }
  toggled = !toggled;
}

navbarToggler.onclick = function() {
  toggleNavbar();
};
