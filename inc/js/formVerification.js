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

function checkNameValue(){
    if(document.getElementById("name").value == ""){
        alert("Nome non inserito!");
        return false;
    }
    return true;
}

function checkSurnameValue(){
    if(document.getElementById("surname").value == ""){
        alert("Cognome non inserito!");
        return false;
    }
    return true;
}

function checkEmailValue(){
    if(document.getElementById("email").value == ""){
        alert("E-Mail non inserita");
        return false;
    }
    return true;
}

function checkPassValue(){
    if(document.getElementById("pass").value == ""){
        alert("Password non inserita!");
        return false;
    }
    return true;
}

function checkConfirmPassValue(){
    if(document.getElementById("confirmPass").value == "" || (document.getElementById("confirmPass").value != document.getElementById("pass").value)){
        alert("Conferma Password non inserita o non valida!");
        return false;
    }
    return true;
}

function checkCofirmTermsValue(){
    if(document.getElementById("confirmTerms").checked == false){
        alert("Non hai accettato i termini!");
        return false;
    }
    return true;
}

function checkRegisterForm(){
    if(checkNameValue() && checkSurnameValue() && checkEmailValue() && checkPassValue() && checkConfirmPassValue() && checkCofirmTermsValue()){
        document.getElementById("registerForm").submit();
    }
}

function checkLoginForm(){
    if(checkEmailValue() && checkPassValue()){
        document.getElementById("loginForm").submit();
    }
}