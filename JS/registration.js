function regClick() {
    //let email = document.querySelector("input[name='email']").value;
    //let userName = document.querySelector("input[name='userName']").value;
    //let phoneNum = document.querySelector("input[name='phoneNum']").value;
    //let pwd = document.querySelector("input[name='password_1']").value;
    //let repPwd = document.querySelector("input[name='password_2']").value;
    //let privStat = document.querySelector("input[name='privacy-statement']").value;
    //if (!chkEmail(email)) alert("Emailcím mező kitöltése kötelező");
    //if (!chkUserName(userName)) alert("Felhasználói név mező kitöltése kötelező");
    //if (!chkPhoneNum(phoneNum)) alert("Telefonszám mező kitöltése kötelező");
    //if (!chkPassword(pwd)) alert("Jelszó mező kitöltése kötelező");
    //if (!chkRepPwd(repPwd)) alert("Jelszó megerősítése mező kitöltése kötelező");
    //if (!pwdMatching(pwd, repPwd)) alert("Nem egyező jelszó!");
    //if (!chkPrivStat(privStat)) alert("Fogadja el az adatvédelmi nyilatkozatunkat!");
    //if (pwdMatching(pwd, repPwd) == true) alert("Mehet a regisztráció");
}

function pwdMatching(pwd, repPwd) {
    return(pwd != repPwd)? false: true;
}
/*
function chkPrivStat(privStat){
    return (privacy-statement==false)? false: true;
}


function chkEmail(email) {
    return (email=="")? false: true;
}

function chkUserName(userName) {
    return(userName=="")? false: true;
}

function chkPhoneNum(phoneNum) {
    return(phoneNum=="")? false: true;
}

function chkPassword(pwd) {
    return(pwd=="")? false: true;
}

function chkRepPwd(repPwd) {
    return(repPwd=="")? false: true;
}
*/

