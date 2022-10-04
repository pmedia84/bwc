///Nav Slide
$('#nav-btn').on("click",function(){
    $('#nav-btn').toggleClass("btn-active");
    //$('#nav-links').toggleClass('nav-links-active');
    $('#nav-links').slideToggle(400 );
    $('.nav-menu').toggleClass("nav-links-active");
   
});
////////////////////////////////

///Intersection Observer
const navbar = document.querySelector(".nav");
const hero = document.querySelector(".hero-text");
const options = {
    threshold: [0.9],
   rootMargin: "-125px 0px 0px 0px",
};

const heroobserver = new IntersectionObserver(function(entries, heroobserver) {
    entries.forEach(entry =>{
        if(!entry.isIntersecting)
        navbar.classList.add("nav-scrolled");
        else{
            navbar.classList.remove("nav-scrolled");
        }
    });
},options);
heroobserver.observe(hero);
/////////////////////////////