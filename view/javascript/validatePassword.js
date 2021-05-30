function Validate(){
    var password = document.getElementById("pass").value;
    var confirmPassword = document.getElementById("pass2").value;
    if(password != confirmPassword){
        alert("Les mots de passe de correspondent pas !");
        return false;
    }
    else{
        return true;
    }
}

function ValidateMDP(){
    var msgMDP;
    var password = document.getElementById("pass").value;
    var confirmPassword = document.getElementById("pass2").value;
    if(password != confirmPassword){
        msgMDP = "<p style='color:red'>Les mots de passe ne correspondent pas</p>"
    }
    else{
        msgMDP = "<p style='color:green'>Ok</p>"
    }
    document.getElementById("msgMDP").innerHTML = msgMDP;
}
/*
function isEmpty(what){
    var msg;
    var element = document.getElementById(what).value.trim();
    if(element === ""){
        msg = "<p style='color:red'>Champ obligatoire</p>";

    }
    else{
        msg = "<p>OK</p>";
    }
    document.getElementById("MSG").innerHTML = msg;

}*/


function informationNotCompleted(){

}