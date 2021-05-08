function qs(selector){
    return document.querySelector(selector)
}
function validation(){
    var rePass = qs("#reupassword").value;
    var pass = qs("#upassword").value;
    // let button = document.getElementById("test");
        // profile pattern
        pass_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
        email_pattern = /^([A-Za-z0-9]+\.?){2,}[^.]\@(\w\.?)*[^\.]\.[A-Za-z]{2,5}$/;
        phone_pattern = /^([0-9]+[\.\-]?){8,11}[^\.\-]$/;

        //personal pattern
        pattern_name = /^[a-zA-Z\s]{2,}$/;
        pattern_address = /^[a-zA-Z0-9\s]{2,}$/;
        pattern_city = /^[a-zA-Z\s]{2,}$/
        pattern_zipcode = /^[0-9]{3,6}$/

        //------------- assign variables to each value --------

        //profile
        value_pass = document.querySelector("#upassword").value;
        value_email = document.querySelector("#uemail").value;
        value_phone = document.querySelector("#uphone").value;

        //personal
        value1 = document.querySelector("#fname").value;
        value = document.querySelector("#lname").value;
        value2 = document.querySelector("#address").value;
        value3 = document.querySelector("#city").value;
        value4 = document.querySelector("#zipcode").value;


        // Condition

        // If every is correct, display a submit button
        if(
            pass_pattern.test(value_pass)&&email_pattern.test(value_email)
            &&phone_pattern.test(value_phone)&&pattern_name.test(value1)
            &&pattern_name.test(value)&&pattern_address.test(value2)
            &&pattern_city.test(value3)&&pattern_zipcode.test(value4)
            &&pass==rePass
        ){
            document.querySelector("#submit0").style.display = "block";
            qs("#alert_email").innerHTML = "Valid Email"
            qs("#alert_phone").innerHTML = "Valid Phone"
            qs("#alert").innerHTML = "Valid Password"
            qs("#alert_name").innerHTML = "Valid Name"
            qs("#alert_address").innerHTML = "Valid Address"
            qs("#alert_city").innerHTML = "Valid City"
        }

        // If password is correct or incorrect
        
        if(pass_pattern.test(value_pass)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert").innerHTML = "Valid Password"
        }
        if(!pass_pattern.test(value_pass)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert").innerHTML = "Invalid Password"
        }
        if(pass==rePass){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert").innerHTML = "Valid Password";
        }
        if(pass!=rePass){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert").innerHTML = "Invalid Password"
        }

        // If email is correct or incorrect
        if(email_pattern.test(value_email)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_email").innerHTML = "Valid Email"
        }
        if(!email_pattern.test(value_email)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_email").innerHTML = "Invalid Email"
        }

        // If phone is correct or incorrect
        if(phone_pattern.test(value_phone)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_phone").innerHTML = "Valid Phone"
        }
        if(!phone_pattern.test(value_phone)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_phone").innerHTML = "Invalid Phone"
        }

        // If name is correct or incorrect
        if(pattern_name.test(value1)&&!pattern_name.test(value)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_name").innerHTML = "Valid Name"
        }
        if(!pattern_name.test(value1)&&!pattern_name.test(value)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_name").innerHTML = "Invalid Name"
        }
        
        // If address is correct or incorrect
        if(pattern_address.test(value2)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_address").innerHTML = "Valid Address"
        }
        if(!pattern_address.test(value2)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_address").innerHTML = "Invalid Address"
        }

        // If city is correct or incorrect
        if(pattern_city.test(value3)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_city").innerHTML = "Valid City"
        }
        if(!pattern_city.test(value3)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_city").innerHTML = "Invalid City"
        }

        // If zipcode is correct or incorrect
        if(pattern_zipcode.test(value4)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_zipcode").innerHTML = "Valid ZipCode";
        }
        if(!pattern_zipcode.test(value4)){
            document.querySelector("#submit0").style.display = "none";
            qs("#alert_zipcode").innerHTML = "Please Enter Zip Code";
        }

}

// Show and hide store owner
function show_hide(x){
    if(x==0){
        document.querySelector("#owner_info").style.display = "block";
    }else{
        document.querySelector("#owner_info").style.display = "none";
        return;
    }

}




