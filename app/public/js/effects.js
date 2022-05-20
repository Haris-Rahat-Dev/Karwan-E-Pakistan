/*
    var cont=0;
    function loopSlider(){
    var xx= setInterval(function(){
    switch(cont)
{
    case 0:{
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-custom-green");
    $("#sButton2").addClass("bg-custom-green");
    cont=1;

    break;
}
    case 1:
{

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-custom-green");
    $("#sButton1").addClass("bg-custom-green");

    cont=0;

    break;
}


}},8000);

}
    function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
}
    function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-custom-green");
    $("#sButton1").addClass("bg-custom-green");
    reinitLoop(4000);
    cont=0
}
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-custom-green");
    $("#sButton2").addClass("bg-custom-green");
    reinitLoop(4000);
    cont=1
}

    $(window).ready(function(){
    $("#slider-2").hide();
    $("#sButton1").addClass("bg-custom-green");
    loopSlider();
});
*/

//for responsive nav
const mobileNav = () => {
    $(document).ready(function(){
            $("#panel").slideToggle("slow");
    });
}

//for SideDrawer
const dashboardDrawer = () => {
    $(document).ready(function(){
        $("#panel2").slideToggle("slow");
    });
}

/*$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});*/


   /* // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }*/


var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}




