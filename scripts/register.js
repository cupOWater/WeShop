function qs(selector){
    return document.querySelector(selector)
}
// // password validation
// function passwordValidation(){
//     var rePass = qs("#reupassword").value;
//     var pass = qs("#upassword").value;
//     button = document.querySelector("#verify");
//     button.addEventListener("click", function(ev){
//         pass_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
//         value = document.querySelector("#upassword").value;
//         if(pass_pattern.test(value)){
//             qs("#alert").innerHTML = "Valid passsword"
//         }else{
//             qs("#alert").innerHTML= "Invalid Password"
//         }
//         if(repass == pass){
//             qs("#alert").innerHTML = "Valid passsword"
//         }else{
//             qs("#alert").innerHTML= "Invalid Password"
//         }
//     })
// }
//     // Email validation
// function emailValidation(){
//     button = document.querySelector("#verify");
//     button.addEventListener("click", function(ev){
//         // Enter email pattern
//         email_pattern = /^([A-Za-z0-9]+\.?){2,}[^.]\@(\w\.?)+[^\.]\.[A-Za-z]{2,5}$/; 
//         value = document.querySelector("#uemail").value;
//         // email conditions
//     })
// }
// // phone validation
// function phoneValidation(){
//     button = document.querySelector("#uphone");
//     button.addEventListener("click", function(ev){
//         phone_pattern = /^([0-9]+[\.\-]?){8,11}[^\.\-]$/
//         value = document.querySelector("#uphone").value;
//         // phone conditions
//     })
// }



// // personal info validation
// function personalInfo(){
//     button = document.querySelector("#verify_inf");
//     button.addEventListener("click", function(ev) {
//         pattern_name = /^[a-zA-Z\s]{2,}$/;
//         pattern_address = /^[a-zA-Z0-9\s]{2,}$/;
//         pattern_city = /^[a-zA-Z\s]{2,}$/;
//         value1 = document.querySelector("#fname").value;
//         value = document.querySelector("#lname").value;
//         value2 = document.querySelector("#address").value;
//         value3 = document.querySelector("#city").value;
//             // Test Name
//         if(pattern_name.test(value1)&&pattern_name.test(value)){
//             qs("#alert_name").innerHTML = "Valid name"  
//         }else{
//             qs("#alert_name").innerHTML =  "Invalid name"
//         }
//         // Test Address
//         if(pattern_address.test(value2)){
//             qs("#alert_address").innerHTML = "Valid address"
//         }else{
//             qs("#alert_address").innerHTML ="Invalid address"
//         }
//         if(pattern_city.test(value3)){
//             qs("#alert_city").innerHTML = "Valid City";
//         }else{
//             qs("#alert_city").innerHTML = "Invalid City";
//         }
//     })
// }
function validation(){
    var rePass = qs("#reupassword").value;
    var pass = qs("#upassword").value;
    button = document.querySelector("#test");
    button.addEventListener("click", function(ev){

        // profile pattern
        pass_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
        email_pattern = /^([A-Za-z0-9]+\.?){2,}[^.]\@(\w\.?)+[^\.]\.[A-Za-z]{2,5}$/;
        phone_pattern = /^([0-9]+[\.\-]?){8,11}[^\.\-]$/;

        //personal pattern
        pattern_name = /^[a-zA-Z\s]{2,}$/;
        pattern_address = /^[a-zA-Z0-9\s]{2,}$/;
        pattern_city = /^[a-zA-Z\s]{2,}$/

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


        // Condition
        if(
            pass_pattern.test(value_pass)&&email_pattern.test(value_email)
            &&phone_pattern.test(value_phone)&&pattern_name.test(value1)
            &&pattern_name.test(value)&&pattern_address.test(value2)
            &&pattern_city.test(value3)
        ){
            document.querySelector("#submit").style.display = "block";
            qs("#alert_email").innerHTML = "Valid Email"
            qs("#alert_phone").innerHTML = "Valid Phone"
            qs("#alert").innerHTML = "Valid Password"
            qs("#alert_name").innerHTML = "Valid Name"
            qs("#alert_address").innerHTML = "Valid Address"
            qs("#alert_city").innerHTML = "Valid City"
           
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




