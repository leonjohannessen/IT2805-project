/* ========================================
 *
 * File name: js/menu-panel.js
 * Author: Linn Harbo Dahle
 * Date: October 2016
 *
 * The javascript for the tabbed menu panel in the catering page and
 * the tabbed panel in the contact page
 *
 * ======================================== */

// Boolean used to prevent scrolling to the tabbed panel on page load
var tabPanelInitialized = false;

function openPanel(evt, specificTab){
  //console.log(evt.currentTarget);
  /*Get all the tabContent-elements*/
  var content = document.getElementsByClassName("tabContent");

  /*Hide all the content*/
  for(var i = 0; i < content.length ; i++){
    content[i].style.display = "none";
  }

  /*Get all the panelLinks */
  var panelLinks = document.getElementsByClassName("panelLinks");

  /*Go through all panelLinks and remove the isActive class if it is there*/
  for(var i = 0; i < panelLinks.length ; i++){
    panelLinks[i].classList.remove("isActive");
  }

  /*Get the  number that is clicked and set the content for for example menu3 to be shown by turning it "on" with "block" */
  document.getElementById(specificTab).style.display = "block";

  /*Add a class called isActive to that tab-number that was clicked*/
  evt.currentTarget.classList.add("isActive");

  // Prevent scrolling to the element the first time the function is called (on load)
  if (!tabPanelInitialized) {
    tabPanelInitialized = true;
  } else {
    /* Scroll to current position
    TODO: offset the scroll positoin from top, so the sticky menu does not hide it 
    evt.currentTarget.scrollIntoView(); did not need this after all, keeping the code just in case */
  }
}

/* Set Meny 1 to be initially opened by making javascript click on it*/
document.getElementById("defaultOpen").click();
