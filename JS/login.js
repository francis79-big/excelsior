function logInClick() {
    let email = document.querySelector("input[name='email']").value;
    let pwd = document.querySelector("input[name='password']").value;
    
    if (!chkEmail(email)) alert("Mező kitöltése kötelező");
    if (!chkPassword(pwd)) alert("Mező kitöltése kötelező");
    if (chkPassword(pwd) == true && chkEmail(email) == true) alert("Mehet a belépés");
}

function chkEmail(email) {
    return(email=="")? false: true;
}

function chkPassword(pwd) {
    return(pwd=="")? false: true;
}