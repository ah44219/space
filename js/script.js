function logInForm(){
    var password = document.forms["loginForm"]["password"].value;
    var emri = document.forms["loginForm"]["email"].value;
    if(emri==""){
        alert("email is required !");
        return false;
    } else if(password==""){
        alert("Password is required !")
        return false;
    }
}




function REGISTERForm(){
    var firstname = document.forms["registerform"]["firstname"].value;
    var lastname = document.forms["registerform"]["lastname"].value;
    var email = document.forms["registerform"]["email"].value;
    var password = document.forms["registerform"]["password"].value;
    var password2=document.forms["registerform"]["password2"].value;
    if(firstname == ""){
        alert("First Name is required !");
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


function contactForm(){
    var fullname=document.forms["ContactForm"]["fullname"].value;
    var email=document.forms["ContactForm"]["email"].value;
    var message=document.forms["ContactForm"]["message"].value;
    
    if(fullname == ""){
        alert("Please enter your name ! ");
        return false;
    }else if(email == ""){
        alert("Please enter your email !");
        return false;
    }else if(message == ""){
        alert("You must write down the message to send it !");
        return false;
    }
}


// slider
let images=[
    "images/lr1.jpg",
    "images/bedroom.jpg",
    "images/door.jpg",
    "images/kitchen.jpg",
    "images/livingroom.jpg",
    "images/lr5.jpg"
    
];

let num=0;
let i=0;
let time=3000;

function next(){
    let slider=document.getElementById('slider1');
    num++;
    if(num>=images.length){
        num=0;
    }
    slider1.src=images[num];
}

function previous(){
    let slider=document.getElementById('slider1');
    num--;
    if(num<0){
        num=images.length-1;
    }
    slider1.src=images[num];
}




