/*The javascript for the tabbed menu panel in the catering page*/


function openMenu(evt, menuNumber){

  /*Get all the tabContent-elements*/
  var content = document.getElementsByClassName("tabContent");

  /*Hide all the menu content*/
  for(var i = 0; i < content.length ; i++){
    content[i].style.display = "none";
  }

  /*Get all the menuLinks */
  var menuLinks = document.getElementsByClassName("menuLinks");

  /*Go through all menuLinks and remove the isActive class if it is there*/
  for(var i = 0; i < menuLinks.length ; i++){
    menuLinks[i].classList.remove("isActive");
  }

  /*Get the menu number that is clicked and set the content for for example menu3 to be shown by turning it "on" with "block" */
  document.getElementById(menuNumber).style.display = "block";

  /*Add a class called isActive to that menu-number that was clicked*/
  evt.currentTarget.classList.add("isActive");
}

/* Set Meny 1 to be initially opened by making javascript click on it*/
document.getElementById("defaultOpen").click();
