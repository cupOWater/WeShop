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
    // Email validation
function emailValidation(){
    button = document.querySelector("#verify");
    button.addEventListener("click", function(ev){
        // Enter email pattern
        email_pattern = /^(?!\.)[^\.][a-zA-Z\.0-9]{2,}[^\.]@(?=.*\.)[^\.][a-zA-Z\.0-9]{2,}[^\.]$/; 
        value = document.querySelector("#uemail").value;
        // email conditions
    })
}
// phone validation
function phoneValidation(){
    button = document.querySelector("#uphone");
    button.addEventListener("click", function(ev){
        phone_pattern = /^$/
        value = document.querySelector("#uphone").value;
        // phone conditions
    })
}
// personal info validation
function personalInfo(){
    button = document.querySelector("#verify_inf");
    button.addEventListener("click", function(ev) {
        pattern_name = /^[a-zA-Z\s]{2,}$/;
        pattern_address = /^[a-zA-Z0-9\s]{2,}$/;
        pattern_city = /^[a-zA-Z\s]{2,}$/;
        value1 = document.querySelector("#fname").value;
        value = document.querySelector("#lname").value;
        value2 = document.querySelector("#address").value;
        value3 = document.querySelector("#city").value;
            // Test Name
        if(pattern_name.test(value1)&&pattern_name.test(value)){
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
        if(pattern_city.test(value3)){
            qs("#alert_city").innerHTML = "Valid City";
        }else{
            qs("#alert_city").innerHTML = "Invalid City";
        }
    })
}



function show_hide(x){
    if(x==0){
        document.querySelector("#owner_info").style.display = "block";
    }else{
        document.querySelector("#owner_info").style.display = "none";
        return;
    }

}




