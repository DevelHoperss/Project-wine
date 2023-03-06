// let loader = document.getElementById("preloader");
// // let header = document.getElementById("header");

// window.addEventListener("load", ()=>{
//     // header?.classList.add('d-none');
//     setTimeout(function(){
//     loader?.classList.add('d-none');
//     }, 2200);
// })


let reviews = [
    
    {name: 'Paolo' , quote: 'Agnello, per pochi..'},
    {name: 'Daniele' , quote: 'Nun se pò vedé!'},
    {name: 'Mattia' , quote: 'La mia parte preferita il carrello !'},
    {name: 'Fabio' , quote: 'La vita è amara come il caffè'},
    
]

// catturiamo il wrapper

let swiperWrapper = document.querySelector('.swiper-wrapper');

// per ogni reviews crea le card

let whiteBg = true;

reviews?.forEach((recensione)=>{
    
    // crea un div
    
    let div = document.createElement('div');
    
    // al div creato, aggiungi le classi
    
    div.classList.add('swiper-slide' , 'd-flex' , 'align-items-center' , 'justify-content-center');
    
    // riempiamo l'inner HTML del div creato
    
    div.innerHTML = `
    
    <div class="card-custom">
    <p class="h3 text-gold"> ${recensione.name} </p>
    
    <p class="text-center text-gold p-2"> ${recensione.quote}</p>
    </div>
    
    `
    
    // appendere tutto al wrapper
    
    swiperWrapper?.appendChild(div);
    
})

// inizializzazione swiper

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    
    // AUTOPLAY
    
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    
    // EFFECT
    
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    
    //  BREAKPOINTS
    
    breakpoints: {
        640: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
    
});