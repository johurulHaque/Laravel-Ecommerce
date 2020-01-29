// user registration form validation client side
// user registration form validation client side
// ?? at the middle of name feild reg-ex how should apply (onsubmit form .Not the with server validation)
// if (!reg_phone.test(phone))
//function return false for invalid mail then it !false = true
// name field validation

//till not implement
function myFunction() {
    var x = document.getElementById("reg_psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
};
@push('css')
<style>
/* popover window in navbar */
.popover{
width:1283px;
height:250px;
max-width:1290px !important;  /*Required for popovers wider than 276px (Bootstrap's max-width for popovers) or use  max-width:none property to style*/
margin-left: -8px;
}
/* use when content inside a button and do the style .popover  like upper  */
#popover-content {
/* width:1250px;
height:250px;
max-width:none; */    /*  // Required for popovers wider than 276px (Bootstrap's max-width for popovers) */
}
</style>
@endpush
{{-- push script --}}
{{-- push script --}}
@push('js')
<script>
// jqery popover
// jqery popover
$(document).ready(function() {
$('[data-toggle="popover"]').popover({// condition apply in the attribute
container: 'body',//take the body size that is width
placement: 'bottom',
html: true,
trigger : 'manual',
animation:false,
content: function() {
return $('#popover-content').html();
}
});
$('.popover').on('mouseenter', function () {
var _this = this;
$(this).popover('show');
$('.popover').on('mouseleave', function () {
$(_this).popover('hide');
});
}).on('mouseleave', function () {
var _this = this;
setTimeout(function () {
if (!$('.popover:hover').length) {
$(_this).popover('hide');
}
}, 50);
});
// animated placeholder in nav bar
var textbox = $('.textbox'),//get the class
valueLength,
value = '',
id = setTimeout(ReadyTyping, 200); //the function starts work  or evaluates an expression after a specified number of ms(where 1s = 1000ms) //To execute a function only once, after a specified number of milliseconds, use the setTimeout() method.
//Get ready for typing in the placeholder start
//Get ready for typing in the placeholder start
function ReadyTyping() {
clearTimeout(id);//The clearTimeout() method clears a timer set with the setTimeout() method. //clear first clearTimeout(ReadyTyping, 600) call
var options = ["search for products...","search for brands..."];   //search for optiont that can be multiple .if single value no need array just a single value
value = options[Math.floor((Math.random() * options.length ))]; //take array value for the field with random index
valueLength = 1; //start  at 0//1 then substring (0 to 1)
id = setInterval(type, 100); //The setInterval() method calls a function or evaluates an expression at specified intervals (in milliseconds)    //The setInterval() method will continue calling the function until clearInterval() is called, or the window is closed. //call type every 50ms
}
// Start typing in the placeholder within 50ms
// Start typing in the placeholder within 50ms
function type() {
textbox.attr("placeholder", value.substring(0, valueLength++)); //typing in the place holder untill bellow condition //First character is at index 0
//when finshed typing clear interval and start erasing
if (valueLength === value.length + 1) {//
clearInterval(id);//The ID value returned by setInterval() is used as the parameter for the clearInterval() method.//Stop calling setInterval() //clear clearInterval(type, 50)
id = setTimeout(ReadyErasing, 600); //start ReadyErasing call once after delay 1000ms
}
}
// Ready to eraging the placeholder value
// Ready to eraging the placeholder value
function ReadyErasing() {
clearTimeout(id); //clear clearTimeout(ReadyErasing, 2000);
valueLength = value.length; //start at end
id = setInterval(erase, 100); //call erase every 50ms
}
// Start eraging in the placeholder within 50ms
// Start eraging in the placeholder within 50ms
function erase() {
textbox.attr("placeholder", value.substring(0, valueLength--));
//when finshed erasing clear interval and call type
if (valueLength < 0) {
clearInterval(id); //stop call from setInterval() //clear clearInterval(erase, 50)
id = setTimeout(ReadyTyping, 100); //start over
}
}
});
</script>
@endpush
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
