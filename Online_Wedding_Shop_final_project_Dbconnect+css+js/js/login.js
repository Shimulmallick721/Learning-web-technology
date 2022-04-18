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
    if (username.length<5){
        seterror("username", "*Length of username is too short");
        returnval = false;
    }

    if (username.length == 0){
        seterror("username", "*Length of username cannot be empty!");
        returnval = false;
    }
    
    var password = document.forms['myForm']["password"].value;
    if (password.length < 6){
        seterror("password", "*Password should be atleast 6 characters long!");
        returnval = false;
    }
     if (password.length == 0){
        seterror("password", "*Password cannot be empty!");
        returnval = false;
    }



    return returnval;
}
