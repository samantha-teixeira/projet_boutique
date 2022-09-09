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




// close.addEventListener("click",fermerMenu);
// console.log(close);

// function fermerMenu() {
    
//     menu_container.style.display="none";
//         menu2.style.display="none";
//         close.style.display="none";
//         burger.style.display="block";
//     if(menu_container.style.display="block") {
//         menu_container.style.display="none";
//         console.log("test")
//     }
//     else {
//         return false;
//     }
// }


