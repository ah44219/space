// function logInForm(){
//     var password = document.forms["loginForm"]["password"].value;
//     var emri = document.forms["loginForm"]["username"].value;
//     if(emri==""){
//         alert("Username is required !");
//         return false;
//     } else if(password==""){
//         alert("Password is required !")
//         return false;
//     }
// }

function REGISTERForm(){
    var firstname = document.forms["registerform"]["firstname"].value;
    var lastname = document.forms["registerform"]["lastname"].value;
    var email = document.forms["registerform"]["email"].value;
    var password = document.forms["registerform"]["password"].value;
    var password2=document.forms["registerform"]["password2"].value;
    if(firstname == ""){
        alert("First Name is required !");
		document.REGISTERForm.firstname.focus();
        return false;
    }else if(lastname == ""){
        alert("Last Name is required !");
        return false;
    }
    else if(email == ""){
        alert("Email Address is required !");
        return false;
    }else if(password == ""){
        alert("Please choose a password for your account .");
        return false;
    }else if(password2 == ""){
        alert ("You must confirm the password ");
        return false;
    }
}