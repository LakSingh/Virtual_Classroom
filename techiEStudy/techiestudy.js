var index=-1;
showSlides(index);
function changeSlide(n){
index=index+n;
showSlides(index);}
function currentSlide(n){
index=n;
showSlides(index);}

function showSlides(n){
var i;
var slides=document.getElementsByClassName("slides");
//var dots=document.getElementsByClassName("dots");
if(n>slides.length){index=1;}
if(n<1){index=slides.length;}
for(i=0;i<slides.length;i++){
slides[i].style.display="none";}
//for(i=0;i<n;i++){
//dots[i].className=dots[i].className.replace("active"," ");}
slides[index-1].style.display= "inline-block";
//dots[index-1].className+= "active";
}
