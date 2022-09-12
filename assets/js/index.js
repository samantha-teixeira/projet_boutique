let btn_burger = document.getElementById("btn_burger");
let menu = document.getElementById("menu");
let menu_container = document.getElementById("menu_container");
let menu2 = document.getElementById("menu2");
let close = document.getElementById("close");
let btn_close = document.getElementById("btn_close");
let header = document.getElementById("header");

btn_burger.addEventListener("click",ouvrirMenu);

function ouvrirMenu() {
    if(menu_container.style.display="none") {
        menu_container.style.display="block"
        menu2.style.display="flex";
        menu2.style.display="block";
        burger.style.display = "none";
        close.style.display="flex";
    }
    else {
        return false;
    }
};

btn_close.addEventListener('click', fermerMenu);
menu_container.addEventListener('click',fermerMenu);

function fermerMenu() {
    menu2.style.display= 'none';
    burger.style.display= "flex";
    close.style.display= "none";

    if (menu_container.style.display = 'block') {
        menu_container.style.display = 'none';
    } else {
        return false;
    }
};

function Function1(largeScreen) {
    if (largeScreen.matches) { // If media query matches
        menu_container.style.display = 'none';
        menu2.style.display="none";
        burger.style.display = "none";
        close.style.display = "none";
        menu.style.display = "block";
    } else {
        burger.style.display = "flex";
        menu.style.display = "none";
    }
};

let largeScreen = window.matchMedia("(min-width: 701px)")
Function1(largeScreen) // Call listener function at run time
largeScreen.addListener(Function1)


var slide = new Array("assets/images/slider/anniversaire.jpg", "assets/images/slider/cupcake.jpg", "assets/images/slider/entremet.jpg", "assets/images/slider/mariage.jpg","assets/images/slider/rosecake.jpg","assets/images/slider/cakeball.jpg");
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}