function clearErrors(){

    errors = document.getElementsByClassName('formerrorcheck');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    element = document.getElementById(id);
    element.getElementsByClassName('formerrorcheck')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();

    var username = document.forms['myForm']["username"].value;
    if (username.length == 0){
        seterror("username", "*Length of username cannot be zero!");
        returnval = false;
    }
    if (username.length<5){
        seterror("username", "*Length of username is too short");
        returnval = false;
    }

    
    var email = document.forms['myForm']["email"].value;
    if (email.length<10){
        seterror("email", "*Email length is too short");
        returnval = false;
    }

    var email = document.forms['myForm']["email"].value;
    if (email.length>50){
        seterror("email", "*Email length is too long");
        returnval = false;
    }
    var password = document.forms['myForm']["password"].value;
    if (password.length < 6){
        seterror("password", "*Password should be atleast 6 characters long!");
        returnval = false;
    }

    var repass = document.forms['myForm']["repass"].value;
    if (repass != password){
        seterror("repass", "*Password and Confirm password should match!");
        returnval = false;
    }

    return returnval;
}
