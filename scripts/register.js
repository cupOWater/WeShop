function qs(selector){
    return document.querySelector(selector)
}

function verify_pass(){
    var rePass = qs("#reupassword").value;
    var pass = qs("#upassword").value;

     // Verifying
    if (rePass!= pass){
        qs(".alert").innerHTML = "Password does not match!";
    }else{
        qs(".alert").innerHTML = "Password is match!";
    }

}
    // Emailll
function validateEmail(){
    button = document.querySelector("#verify");
    button.addEventListener("click", function(ev) {
        pattern = new RegExp(/^[1-9A-Za-z^<>()[\]\\,;:\s@\"]|.?(?=.){3,}@[1-9A-Za-z]{1,}.?(?=.)[1-9A-Za-z]{3,}$/)
        value = document.querySelector("#uemail").value;
        if (pattern.test(value)){
            qs("#alert_email").innerHTML = "Valid Email"
        }else{
            qs("#alert_email").innerHTML = "Invalid Email"
        }



        // name_pattern = new RegExp(/^[1-9]|[A-Z]|[a-z][1-9][A-Z][a-z][^<>()[\]\\,;:\s@\"]|[.]?{3,}$/);
        // domain_pattern = new RegExp(/^@[]$/)
    })


}

