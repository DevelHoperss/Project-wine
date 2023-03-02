let loader = document.getElementById("preloader");

window.addEventListener("load", ()=>{
    setTimeout(function(){
    loader?.classList.add('d-none');
    }, 2200);
})
