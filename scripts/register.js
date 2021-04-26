function qs(selector){
    return document.querySelector(selector)
}

function verify_pass(){
    var rePass = qs("#reupassword").value;
    var pass = qs("#upassword").value;

     // Re type password match password
    if (rePass!= pass){
        qs(".alert").innerHTML = "Password does not match";
    }else{
        alert("Password is match")
    }
}

