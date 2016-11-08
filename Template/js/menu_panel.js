/*
FILE NAME: js/menu_panel.js

WRITTEN BY: Linn Harbo Dahle

WHEN: October 2016

PURPOSE: The javascript for the tabbed menu panel in the catering page and the tabbed panel in the contact page
*/

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
  /*Scroll to current position*/
  evt.currentTarget.scrollIntoView();
}

/* Set Meny 1 to be initially opened by making javascript click on it*/
document.getElementById("defaultOpen").click();
