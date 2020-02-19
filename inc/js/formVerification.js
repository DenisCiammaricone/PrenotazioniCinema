function checkFormValues(){
    if(document.getElementById("name").value == ""){
        alert("Nome non inserito!");
        return false;
    }
    if(document.getElementById("surname").value == ""){
        alert("Cognome non inserito!");
        return false;
    }
    if(document.getElementById("email").value == ""){
        alert("E-Mail non inserita");
        return false;
    }
    if(document.getElementById("pass").value == ""){
        alert("Password non inserita!");
        return false;
    }
    if(document.getElementById("confirmPass").value == ""){
        alert("Conferma Password non inserita!");
        return false;
    }
    if(document.getElementById("confirmTerms").checked == false){
        alert("Non hai accettato i termini!");
        return false;
    }

    return true;
}

function checkForm(){
    if(checkFormValues()){
        document.getElementById("registerForm").submit();
    }
}