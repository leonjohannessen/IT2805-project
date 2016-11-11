// Onclick function for submit-button: Gives the user feedback on that the form has been sent
      function submitInfo(){
        //prevents the view to just up
        event.preventDefault();
        //Displays a feedback message
        document.getElementById('feedback').style.visibility = "display";
        document.getElementById('feedback').style.display = "block";
        document.getElementById('btnSubmit').style.display = "none";
    }
