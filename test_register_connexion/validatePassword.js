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