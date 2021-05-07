function qs(selector){
    return document.querySelector(selector);
}

u_email = qs("#u_email");
u_password = qs("#u_password");
error_msg = qs("#error_msg");

function validate_user(){
    var valid = false;
    email_pattern = new RegExp(/^([A-Za-z0-9]+\.?){2,}[^.]\@(\w\.?)*[^\.]\.[A-Za-z]{2,5}$/);
    if (u_password.value == "password" && email_pattern.test(u_email.value)){
        localStorage.setItem("email", u_email.value)
        localStorage.setItem("loginStat", "true")
        valid = true;
    }

    if(valid){
        window.location.href = "profile.html";
    }
    else{
        error_msg.style.display = "block";
    }
}

display_email = qs("#display_email");
if (display_email != null){
    display_email.innerHTML = localStorage.email;
}