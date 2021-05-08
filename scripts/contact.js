function qs(selector) {
    return document.querySelector(selector)
}

var message = qs("#box");
var text_box_msg = qs("#text_box_msg");
message.addEventListener("input", function(){
    if (message.value.length < 50){
        text_box_msg.style.color = "red";
        text_box_msg.innerHTML = `${50 - message.value.length} more letters are needed`
    }else if(message.value.length <= 500){
        text_box_msg.style.color = "";
        text_box_msg.innerHTML = `You can type ${500 - message.value.length} more letters`
    }else{
        text_box_msg.innerHTML = `Deleting ${message.value.length - 500} is needed`
        text_box_msg.style.color = "red"
    }
})

function validation() {
    var name = qs("#fullName").value;
    var email = qs("#userEmail").value;
    var phone = qs("#userPhone").value;
    var contactMethod =  document.querySelectorAll('input[name=contact_method]:checked');
    var contactDay = document.querySelectorAll('input[name=contact_day]:checked');
    var serviceType = document.querySelectorAll('input[name=service_type]:checked')
    //regex
    nameRegex = /^[A-Za-z]{3,}$/; // at least 3 characters
    emailRegex = /^([A-Za-z0-9]+\.?){2,}[^.]\@(\w\.?)*[^\.]\.[A-Za-z]{2,5}$/;
    phoneRegex = /^([0-9]+[\.\-]?){8,11}[^\.\-]$/;

    if (!nameRegex.test(name)){
        alert("At least 3 characters for name");
        return false;
    }
    if (!emailRegex.test(email)){
        alert("Invalid email")
        return false;
    }
    if (!phoneRegex.test(phone)){
        alert("Invalid phone number")
        return false;
    }
    if (contactDay.length < 1 && serviceType.length < 1){
        alert("Need to choose at least 1 for checkbox")
        return false;
    }
    if (contactMethod.length != 1){
        alert("Need to choose 1 contact method")
        return false;
    }
    if (message.value.length < 50){
        alert("Need more letters")
        return false;
    }
    if (message.value.length >500){
        alert("Need less letters")
        return false;
    }
    alert("Message has been sent!")
    return true;
}
    // valueName = document.querySelector("#userName").value;
    // valueEmail = document.querySelector("#userEmail").value;
    // valuePhone = document.querySelector("#userPhone").value;
    // valueMethod = document.querySelector("#contacttype").value;
    // valueDay = document.querySelector("#day").value;
    //
    //   if(!nameRegex.test(valueName)) {
    //       document.querySelector("#submitButton").style.display = "none";
    //       qs("#alertName").innerHTML = "Invalid name";
    //
    //   }
    //
    //   if(!emailRegex.test(valueEmail)) {
    //       document.querySelector("#submitButton").style.display = "none";
    //       qs("#alertEmail").innerHTML = "Invalid email";
    //   }
    //
    //   if(!phoneRegex.test(valuePhone)) {
    //       document.querySelector("#submitButton").style.display = "none";
    //       qs("#alertPhone").innerHTML = "Invalid phone number";
    //   }
    //
    //   if(valueMethod == null) {
    //       document.querySelector("#submitButton").style.display = "none";
    //       qs("#alertMethod").innerHTML = "Please choose one contact method";
    //   }
    //
    //   //choose at least one contact day
    //   function validContactDay() {
    //   var valid = false;
    //   var checkValue = document.getElementsByName("contact_day");
    //   for (var i=0, l=checkValue.length; i<l; i++) {
    //       if (checkValue[i].checked) {
    //           valid=true;
    //           break;
    //       }
    //   }
    //   if (valid) {
    //       alert("Thanks for selecting");
    //   } else {
    //       document.querySelector("#submitButton").style.display = "none";
    //       qs("#alertDay").innerHTML = "Please choose at lease one contact day";}
    //   }
    //
    // // valid message: contain 50 to 500 letters
    // // T is number of letters
    // // 1. while typing, if T<50, display message "zzz more letters are needed" (update continuously), zzz=50-T
    // // 2. T reaches >=50 && <500, "you can type zzz more letters", zzz = 500 - T
    // // 3. T>500, "delete zzz letters is needed", zzz = T-500
    // // 1+3, message should be styled for better recognization
    //   document.addEventListener("keyup", function validMessage() {
    //       var T = document.querySelectorAll('box'); // T is number of letters
    //       for (var i=0; i<T.length; i++) {
    //           if (T[i].value < 50) {
    //               a = 50 - T[i];
    //               document.querySelector("#submitButton").style.display = "none";
    //               qs("#alertChar").innerHTML = (a + " more letters are needed");
    //           } else if (T[i].value>=50 && T[i].value<500) {
    //               a = 500 - T[i];
    //               document.querySelector("#submitButton").style.display = "none";
    //               qs("#alertChar").innerHTML = ("You can type " + a + " more letters");
    //           } else if (T[i]>500) {
    //               a = T[i] - 500;
    //               document.querySelector("#submitButton").style.display = "none";
    //               qs("#alertChar").innerHTML = ("Deleting " + a + " letters id needed");
    //           }
    //       }
    //   });
    //
    //   if ( nameRegex.test(valueName) && emailRegex.test(valueEmail)
    //       && phoneRegex.test(valuePhone) && valueMethod!=null
    //       && validContactDay() && validMessage()
    //   ) {
    //       document.querySelector("#submitButton").style.display = "block";
    //   }