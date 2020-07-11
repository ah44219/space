function loginForm(){
    var email = document.getElementsByName("email");
    var password = document.getElementsByName("password");
    if(email==""){
        alert("Email is required !");
        return false;
    } else if(password==""){
        alert("Password is required !")
        return false;
    }
}