// catturo la section
let divAbsolute = document.querySelectorAll("#divAbsolute");

// creo una funzione per creare una media query
function changeWidth(mqWidth) {
    if (mqWidth.matches) { // se la media query matcha 
        divAbsolute?.addEventListener.classList;
        list.add("w-100");
    } else {
        divAbsolute?.addEventListener.classList;
        list.remove("w-100");
    }
}

  let mqWidth = window.matchMedia("(max-width: 700px)");
  changeWidth(mqWidth);// chiamo la funzione
  mqWidth.addEventListener(changeWidth); // collego l'addEventListner ai cambiamenti di stato