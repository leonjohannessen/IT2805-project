/* ========================================
 *
 * File name: js/header-carousel.js
 * Author: Aurora Brun
 * Date: October 2016
 *
 * Initiates an image carousel on the front page of dacarlo.no
 *
 * ======================================== */

var imgIndex = 0;

function headerCarousel() {
  // Gets elemets with class img-slide
  var slideshowImages = document.getElementsByClassName("slide");

  //Loops over elements in list x and sets their display to none
  for (var i = 0; i < slideshowImages.length; i++) {
     slideshowImages[i].classList.remove('active');
  }

  //Add 1 to myIndex
  imgIndex++;

	//Check if myIndex has passed the number of images in carousel, and sets it to 1 if it has.
  if (imgIndex > slideshowImages.length){
		imgIndex = 1;
	}
  //Displays the image corresponding to the current index
  slideshowImages[imgIndex-1].classList.add('active');

  // Wait 5 seconds and call the function again
  setTimeout(headerCarousel, 5000);
}

//Calling the function
headerCarousel();
