function qs(selector){
    return document.querySelector(selector)
}
// password validation
function passwordValidation(){
    var rePass = qs("#reupassword").value;
    var pass = qs("#upassword").value;
    button = document.querySelector("#verify");
    button.addEventListener("click", function(ev){
        pattern = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        value = document.querySelector("#upassword").value;
        if(pattern.test(value)|| rePass == pass){
            qs("#alert").innerHTML = "Valid passsword"
        }else{
            qs("#alert").innerHTML= "Invalid Password"
        }
    })
}

    // Emailll
function validateEmail(){
    button = document.querySelector("#verify");
    button.addEventListener("click", function(ev) {
        pattern = new RegExp(/^[1-9]|[A-Za-z]|[-_,;^*&].?(?=.){3,}@[1-9A-Za-z]{1,}.?(?=.)[1-9A-Za-z]{3,}$/)
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
function personalinfo(){
    button = document.querySelector();
    button.addEventListener("click", function(ev){
        pattern_name = new RegExp(/^[A-Z][a-z]{2,}$/);
        pattern_address = new RegExp(/^[1-9][A-Z][a-z]{2,}/);
        value1 = document.querySelector("#fname,#lname").value;
        value2 = document.querySelector("#address").value;
    })
}
