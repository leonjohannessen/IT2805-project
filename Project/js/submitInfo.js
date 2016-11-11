/* ========================================
 *
 * File name: js/submitInfo.js
 * Author: Kristine Rise Fry
 * Date: November 2016
 *
 * Onclick function for submit-button: Gives the user feedback on that the form has been sent
 * The form is not actually sent, we got information from the studass that this was out of the scope for this project
 *
 * ======================================== */
 //
      function submitInfo(){
        //prevents the view to just up
        event.preventDefault();
        //Displays a feedback message
        document.getElementById('feedback').style.visibility = "display";
        document.getElementById('feedback').style.display = "block";
        document.getElementById('btnSubmit').style.display = "none";
    }
