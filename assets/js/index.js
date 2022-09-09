let burger = document.getElementById("burger");
let menu = document.getElementById("menu");
let menu_container = document.getElementById("menu_container");
let menu2 = document.getElementById("menu2");
let close = document.getElementById("close");

burger.addEventListener("click",ouvrirBurger);

function ouvrirBurger() {
    if(menu_container.style.display="none") {
        menu2.style.display="flex";
        menu2.style.display="block";
        burger.style.display = "none";
        close.style.display="flex";
    }
    else {
        return false;
    }
};

close.addEventListener('click', fermerMenu);
console.log(close);

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


function myFunction1(largeScreen) {
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
}

let largeScreen = window.matchMedia("(min-width: 701px)")
myFunction1(largeScreen) // Call listener function at run time
largeScreen.addListener(myFunction1)
