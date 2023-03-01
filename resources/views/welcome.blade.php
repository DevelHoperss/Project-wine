<x-layout> 
    
    <!-- HEADER --> {{-- CAROSELLO --}}
    <header>
        
        <section class="container-fluid header_custom">
            
            <h1 class="text-center"> FIRÀ </h1>
            
            <div class="row">
                
                <div class="col-12 col-md-12 d-flex justify-content-center">
                    
                    <div id="carouselExampleInterval" class="carousel slide w-100" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="4000">
                                <img src="media/1.jpg" class="d-block img_carousel_custom" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="media/casolare.jpg" class="d-block img_carousel_custom" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="media/interno.jpg" class="d-block img_carousel_custom" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                </div>
                
            </div>
            
        </section>
        
    </header>
    
    <!-- PRIMA SEZIONE SOTTO HEADER -->
    <section class="container-fluid ">
        
        <div class="row">
            
            <div class="col-12 col-md-5 offset-1 text-center ">
                
                <p style="font-weight: bold;"> 
                    
                    Zona di Produzione: Località Matine, nel territorio di Mottola (300 m s.l.m.).
                    
                    Suolo: Argilloso, ricco di scheletro.
                    
                    Sistema di allevamento: Guyot.
                    
                    Vitigni: 100% Primitivo.
                    
                    Produzione per ettaro: 110 q.li/ha.
                    
                    Epoca di vendemmia: Prima decade di Settembre. 
                    
                    Raccolta: Manuale. 
                </p>
                
            </div>
            
            <div class="col-12 col-md-5 offset-1 text-center">
                
                <p> IMMAGINE </p>
                
            </div>
            
        </div>
        
    </section>
    
    
    <!-- SECONDA SEZIONE SOTTO HEADER -->
    <div class="container-fluid mt-5">
        
        <div class="row">

            <div class="col-12 col-md-5 offset-1 text-center">
                
                <p> IMMAGINE </p>
                
            </div>
            
            <div class="col-12 col-md-5 offset-1">
                <p style="font-weight: bold;"> Vinificazione e affinamento: Le uve Primitivo, vengono raccolte manualmente in piccoli cassoni e portate in cantina dove fermentano per circa 7 giorni. Sucessivamente il vino viene affinato in piccoli serbatoi di acciaio inox. Prima di essere messo in vendita, riposa in bottiglia per circa 2 mesi. </p>
            </div> 
            
        </div>
        
    </div>
    
    <!-- TERZA SEZIONE SOTTO HEADER -->
    <section class="container-fluid mt-5">
        
        <div class="row">
            
            <div class="col-12 col-md-5 offset-1">
                
                <p>Caratteristiche Organolettiche
                    
                    Colore: Rosso porpora.
                    
                    Olfatto: Fruttato con note di mirtillo, ciliegia e prugna.
                    
                    Palato: Gusto fresco e morbido, avvolgente, di buona struttura e di pronta beva.
                    
                    
                    
                    Grado alcolico: 13,5% vol.
                    
                    Temperatura di servizio: 16-18 °C.</p>
                    
                </div>

                <div class="col-12 col-md-5 d-flex justify-content-center offset-1">
                
                    <i class="fa-solid fa-bottle-droplet fa-5x"></i>
                    
                </div>
                
            </div>
            
        </section>
        
        
        <!-- SEZIONE GOCCIA -->
        {{-- <div class="container-fluid div_goccia">
            
            <div class="drop div_goccia"></div>
            <div class="wave div_goccia"></div>
            <div class="row div_goccia">
                
                <div class="col-12 div_goccia d-flex justify-content-center align-items-center vh-100">
                    
                </div>
            </div>
        </div> --}}
        
        
    </x-layout>