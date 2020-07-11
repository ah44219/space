function contactForm(){
    var fullname=document.forms["ContactForm"]["fullName"].value;
    var email=document.forms["ContactForm"]["email"].value;
    var textarea=document.forms["ContactForm"]["textarea"].value;
    
    if(fullname == ""){
        alert("Please enter your name ! ");
        return false;
    }else if(email == ""){
        alert("Please enter your email !");
        return false;
    }else if(textarea == "" ||  textarea.length<20){
        alert("You must write down more than 20 words to send the message !");
        return false;
    }
}
