$(document).ready(function() {
    $("#show_signup").click(function() {
        showpopup();
    });

});

function showpopup() {
    $("#signupform").fadeIn();
    $("#signupform").css({ "visibility": "visible", "display": "block" });
}

function hidepopup() {
    $("#signupform").fadeOut();
    $("#signupform").css({ "visibility": "hidden", "display": "none" });
}


function chSignUpInfo() {
    var dFirstName = document.getElementById("firstname").value;
    var dLastName = document.getElementById("lastname").value;
    var dEmail = document.getElementById("email").value;
    var dPassword = document.getElementById("password").value;
    var dRepeatPassword = document.getElementById("repeatpassword").value;


    if (dFirstName == "" || dLastName == "" || dEmail == "" || dPassword == "" || dRepeatPassword == "") {

        alert("Please fill out all fields")
        showpopup()

    } else {
        inPutdataToserver()
        hidepopup()
    }

}


function inPutdataToserver() {
    alert("OK")
}