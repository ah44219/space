let images=[
    "images/shtrati.jpg",
    "images/dritare.jpg",
    "images/kuzhina.jpg",
    "images/dera.jpg",
    "images/kauqi.jpg"
];

let num=0;

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


// change image automatic
automaticSlide();
function automaticSlide(){
    let slide=document.getElementById('slider1');
    for(let i=0;i<images.length;i++ ){
        slide.images[i];
    }
    setTimeout(automaticSlide,3000);
}


