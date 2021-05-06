function qs(selector){
    return document.querySelector(selector)
}
// password validation
function passwordValidation(){
    var rePass = qs("#reupassword").value;
    var pass = qs("#upassword").value;
    button = document.querySelector("#verify");
    button.addEventListener("click", function(ev){
        pass_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
        value = document.querySelector("#upassword").value;
        if(pass_pattern.test(value)){
            qs("#alert").innerHTML = "Valid passsword"
        }else{
            qs("#alert").innerHTML= "Invalid Password"
        }
        if(repass == pass){
            qs("#alert").innerHTML = "Valid passsword"
        }else{
            qs("#alert").innerHTML= "Invalid Password"
        }
    })
}

    // Emailll validation
function emailValidation(){
    button = document.querySelector("#verify");
    button.addEventListener("click", function(ev){
        name_pattern = 


    })
}






function personalInfo(){
    button = document.querySelector("#verify_inf");
    button.addEventListener("click", function(ev) {
        pattern_name = new RegExp(/^[A-Z]|[a-z]{2,}$/);
        pattern_address = new RegExp(/^[1-9][A-Z]|[a-z]{2,}$/);
        value1 = document.querySelector("#fname, #lname").value;
        value2 = document.querySelector("#address").value;
            // Test Name
        if(pattern_name.test(value1)){
            qs("#alert_name").innerHTML = "Valid name"  
        }else{
            qs("#alert_name").innerHTML =  "Invalid name"
        }

        // Test Address
        if(pattern_address.test(value2)){
            qs("#alert_address").innerHTML = "Valid address"
        }else{
            qs("#alert_address").innerHTML ="Invalid address"
        }
    })
}


