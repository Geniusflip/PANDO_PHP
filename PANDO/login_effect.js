$(document).ready(function() {
    $("#show_login").click(function() {
        showpopup();
    });

});

function showpopup() {
    $("#loginform").fadeIn();
    $("#loginform").css({ "visibility": "visible", "display": "block" });
}

function hidepopup() {
    $("#loginform").fadeOut();
    $("#loginform").css({ "visibility": "hidden", "display": "none" });
}


function chUserAndPssword() {
    var dUsername = document.getElementById("login").value;
    var dPassword = document.getElementById("password").value;

    if (dUsername == "" || dPassword == "") {

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