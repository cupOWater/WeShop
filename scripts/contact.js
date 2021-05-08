//form name is needed

var name = document.getElementById("fullName"); // id is needed
var email = document.getElementById("userEmail"); // id is needed
var phone = document.getElementById("userPhone"); // id is needed
var contactMethod = document.getElementById("contacttype");
var contactDay = document.getElementById("day");
var message = document.getElementById("box");

// valid name: contain at least 3 characters
function validName() {
    if (name.value.length >= 3) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}

// valid email
function validEmail() {
    var emailRegex = /^([A-Za-z0-9]+\.?){2,}[^.]\@(\w\.?)+[^\.]\.[A-Za-z]{2,5}$/ ;
    if (email !== '') {
        if (emailRegex.test(email) == false) {
            alert("Your email is invalid, please enter again");
            return false;
        } else {
            return true;
        }
    } else {
        alert("You haven't entered you email yet");
        return false;
    }   
    
}

// valid phone
function validPhone() {
    var phoneRegex = /^([0-9]+[\.\-]?){8,11}[^\.\-]$/ ;
    if (phone !== '') {
        if (phoneRegex.test(phone) == false) {
            alert("Your phone number is invalid, please enter again");
            return false;
        } else {
            return true;
        }
    } else {
        alert("You haven't entered you phone number yet");
        return false;
    }
}

// validate contact method: exactly one option is selected
function validContactMethod() {
    if (document.contactForm.contact_method.value == null || document.contactForm.contact_method.value >= 2) {
        alert("Please choose one option!");
        return false;
    }
    return(true);
}

// valid contact days: at least one option is selected
function validContactDay() {
    var chosenValue = false;
    for (var i=0, l=chosenValue.length; 0<l; i++) {
        if(contactDay[i].checked) { 
            chosenValue=true;
            break;
        }
    }
    if(chosenValue) { alert("Thanks for selecting!"); }
    else alert("Please select at least one option");
}

// valid message: contain 50 to 500 letters
// T is number of letters
// 1. while typing, if T<50, display message "zzz more letters are needed" (update continuously), zzz=50-T
// 2. T reaches >=50 && <500, "you can type zzz more letters", zzz = 500 - T
// 3. T>500, "delete zzz letters is needed", zzz = T-500
// 1+3, message should be styled for better recognization
document.addEventListener("keyup", function validMessage() {
    var T = document.querySelectorAll('box'); // T is number of letters
    for (var i=0; i<T.length; i++) {
        if (T[i].value < 50) {
            a = 50 - T[i];
            alert(a + " more letters are needed");
        } else if (T[i].value>=50 && T[i].value<500) {
            a = 500 - T[i];
            alert("You can type " + a + " more letters");
        } else if (T[i]>500) {
            a = T[i] - 500;
            alert("Deleting " + a + " letters id needed");
        } 
    }
});