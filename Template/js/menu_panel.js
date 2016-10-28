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

  /*Go through all menuLinks and remove the active and replace it with nothing*/
  for(var i = 0; i < menuLinks.length ; i++){
    menuLinks[i].className = menuLinks[i].className.replace("active"," ");
  }

  /*Get the menu numbers (from the function) and set them to be shown  */
  document.getElementById(menuNumber).style.display = "block";
  /*Add an active class to that number*/
  evt.currentTarget.className = evt.currentTarget.className + "active";
}

/* Set Meny 1 to be initially opened by making javascript click on it*/
document.getElementById("defaultOpen").click();
