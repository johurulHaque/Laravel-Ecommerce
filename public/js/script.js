// user registration form validation client side
// user registration form validation client side
// ?? at the middle of name feild reg-ex how should apply (onsubmit form .Not the with server validation)
// if (!reg_phone.test(phone))
//function return false for invalid mail then it !false = true
// name field validation

function myFunction() {
    var x = document.getElementById("reg_psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
};

// registration form field validation when key up before submition
// registration form field validation when key up before submition
function reg_validation() {
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var pass = document.getElementById('password');
    var cpass = document.getElementById('password-confirm');

    // check regular expression form field 
    //fllowed by server side validation app>>Request>>formValidation.php
    //+ means 1 to any range we can also put range {2,20}
    // /abc/ only same as
    // ? optional
    var regex_name = /^[a-zA-Z]+[0-9]*$/;
    var regex_email = /^([a-zA-Z0-9_\.\-]+)@([a-zA-Z0-9\-]+)\.([a-zA-Z]{2,5})(\.[a-z]{2,5})?$/;
    var regex_pass =/[a-zA-Z0-9]{4,10}/;

   
    
    //name field validation with input type
    //name field validation with reg-ex(no need here later update )
    //name field validation with range && null || "" 
    //in one sortho display property inherite hoy  
    if((name.value.length>0) && (regex_name.test(name.value)))
    {
        if (name.value.length <= 3 || name.value.length >= 11) {
            document.getElementById('name_error').innerHTML = "Name should be between 4 to 10 character";
            document.getElementById('name_error').style.color = "red";
            document.getElementById('name_error').style.display = "inline";
            // though does not need because of onkeyup validation not onsubmit validation 
        } 

        if(name.value.length > 3 && name.value.length < 11){
            document.getElementById('name_error').style.display = "none";
        }

    }else{
        document.getElementById('name_error').innerHTML = "Field not be blank and must be alpha numeric character leading alphabet";
        document.getElementById('name_error').style.color = "red";
    }// if empty after onnkeyup only
    // if (!isNaN(name)) same as
    
    
//email field validation with reg-ex (try form onsubmit())
//email field if not match the rule than show the message
//in one sortho display property inherite hoy (careful)
    if(email.value.length <1){
        document.getElementById('email_error').innerHTML = "Email is required";
        document.getElementById('email_error').style.display = "inline";
        document.getElementById('email_error').style.color = "red";
    }else{
        document.getElementById('email_error').style.display = "none";
    }
    
    // pass_validation
    // pass_validation
    if(pass.value.length > 0){
            if(pass.value.length >= 4 && pass.value.length <= 6){
                document.getElementById('pass_error').innerHTML = "weak";
                document.getElementById('pass_error').style.color = "blue";
            }

            if(pass.value.length >= 7  && pass.value.length <= 8){
                document.getElementById('pass_error').innerHTML = "medium";
                document.getElementById('pass_error').style.color = "#7FFF00";
            }

            if(pass.value.length >= 9 && pass.value.length <= 10){
                document.getElementById('pass_error').innerHTML = "strong";
                document.getElementById('pass_error').style.color = "green";
            }

            if(pass.value.length < 4 || pass.value.length > 10){
                document.getElementById('pass_error').innerHTML = "between 4 to 10 digit";
                document.getElementById('pass_error').style.color = "red";
            }
    }else {
        document.getElementById('pass_error').innerHTML = "Password can not be blank";
        document.getElementById('pass_error').style.color = "red";
    }


    // confirm password validation
    // confirm password validation
    // cpass.value.match(pass.value) not work perfactly
    if(pass.value.length > 0){
        if(pass.value == cpass.value){
                document.getElementById('cpass_error').innerHTML = "Match";
                document.getElementById('cpass_error').style.color = "green";
        }else{
                document.getElementById('cpass_error').innerHTML = "Dont match";
                document.getElementById('cpass_error').style.color = "red";
        }
    }
}
