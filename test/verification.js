function Verification($pass){
    var oldPassword = document.getElementById("pass").value;
    var newPassword = document.getElementById("pass1").value;
    var confirmPassword = document.getElementById("pass2").value;
    if(oldPassword != $pass){
        alert ("Le mot de passe renseigner est incorrect.");
        return false;
    }
    else if(newPassword != confirmPassword){
        alert("Vos mot de passe ne sont pas identique. Veuillez réessayer.");
        return false;
    }
    else if(newPassword == $pass){
        alert ("Votre nouveau mot de passe ne peut pas être identique à l'ancien. Veuillez choisir un autre mot de passe.");
        return false;
    }
    else{
        return true;
    }
}