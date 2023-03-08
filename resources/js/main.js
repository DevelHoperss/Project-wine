// let loader = document.getElementById("preloader");
// // let header = document.getElementById("header");

// window.addEventListener("load", ()=>{
//     // header?.classList.add('d-none');
//     setTimeout(function(){
//     loader?.classList.add('d-none');
//     }, 2200);
// })


let header = document.querySelector("#header");

window?.addEventListener("scroll",()=>{
    if(window.scrollY>0){
        header.style.height="30vh";
        header.classList.add("mt-0");
        header.style.height="border-radius";

    }else{
        header.style.height="40vh";
    }
})