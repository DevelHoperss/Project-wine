<x-layout>
    
    
    <!-- HEADER -->     
    <header  class="header_custom mt-4">
        
        
        <section>
            
            <div class="d-flex justify-content-center align-items-center">
                
                <img  src="media/fira-titolo.png" class="logo_custom" alt="">
                
            </div>
            
        </section>
            <ul class="dropdown flag-nav-custom d-flex justify-content-end pe-md-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if(session('locale')=='es')
                <li><x-_locale lang="es"/></li>
                @elseif(session('locale')=='en')
                <li><x-_locale lang="en"/></li>
                @else
                <li><x-_locale lang="it"/></li>
                @endif
            </ul>
            <ul class="dropdown-menu bg-flag-custom text-end text-md-center dropdown-menu-end">
                <li><x-_locale lang="en"/></li>
                <li><x-_locale lang="es"/></li>
                <li><x-_locale lang="it"/></li>
            </ul>
            {{-- <div class="dropdown mx-2">
                <ul class=" dropdown flag-nav-custom m-0 pt-1 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(session('locale')=='es')
                    <li><x-_locale lang="es"/></li>
                    @elseif(session('locale')=='en')
                    <li><x-_locale lang="en"/></li>
                    @else
                    <li><x-_locale lang="it"/></li>
                    @endif
                </ul>
                <ul class="dropdown-menu  bg-flag-custom text-end  dropdown-menu-end ">
                    <li><x-_locale lang="en"/></li>
                    <li><x-_locale lang="es"/></li>
                    <li><x-_locale lang="it"/></li>
                </ul>
                
            </div> --}}
            
        
        
        
        
    </header>
    
    
    <section class="section-custom">
        <h3 class="h3-custom text-center">Primitivo Amabile</h3>
    </section>
    
    
    <!-- PRIMA SEZIONE SOTTO HEADER -->
    <section class="bg-body-custom shadow">
        
        <section class="container-fluid">
            
            <div class="row py-3 justify-content-around">
                
                <div data-aos="fade-right" data-aos-duration="1500" class="col-12 col-md-5 text-center d-flex justify-content-center align-items-center flex-column" >
                    
                    <h2 class="fw-bold">{{__('ui.productionArea')}}</h2>
                    
                    <ul class="ul-custom fs-5 texts-custom text-center">
                        <li>{{__('ui.location')}} (300 m s.l.m.)</li>
                        <li> {{__('ui.soil')}}</li>                 
                        <li>{{__('ui.system')}}.</li>                 
                        <li>{{__('ui.grape')}}</li>                 
                        <li>{{__('ui.yield')}}: 110 q.li/ha.</li>               
                        <li>{{__('ui.harvest')}}.</li>              
                        <li>{{__('ui.manualHarvest')}}</li>
                    </ul>
                    
                </div>
                
                <div data-aos="fade-left" data-aos-duration="1500" class="col-12 col-md-5 text-center img-card1-custom">
                    
                    {{-- <img class="img-section-custom shadow" src="media/1.jpg" alt=""> --}}
                    
                </div>
                
            </div>
            
        </section>
        
        
        <!-- SECONDA SEZIONE SOTTO HEADER -->
        <div class="container-fluid">
            
            <div class="row justify-content-around py-5">
                
                <div data-aos="fade-left" data-aos-duration="2500" class="col-12 col-md-5 text-center d-flex align-items-center justify-content-center flex-column mt-5 secondSection_divCustom">
                    
                    <h2 class="fw-bolder">{{__('ui.winemaking')}}</h2>
                    
                    <p class="fs-5 texts-custom">{{__('ui.description')}} </p>
                </div>
                
                <div data-aos="fade-right" data-aos-duration="2500" class="col-12 col-md-5 text-center img-card2-custom order-lg-first">
                    
                    {{-- <img class="img-section-custom shadow" src="media/casolare.jpg" alt=""> --}}
                    
                </div>
                
            </div>
            
        </div>
        
        <!-- TERZA SEZIONE SOTTO HEADER -->
        <section class="container-fluid thirdContainerCustom">
            
            <div class="row justify-content-around py-5">
                
                <div data-aos="fade-right" data-aos-duration="2000" class="col-12 col-md-5 text-center d-flex justify-content-center align-items-center flex-column">
                    <h2 class="fw-bold">{{__('ui.charac')}}</h2>
                    <ul class="ul-custom texts-custom fs-5">
                        <li>{{__('ui.color')}}</li>
                        <li>{{__('ui.nose')}}</li>
                        <li>{{__('ui.taste')}}</li>
                        <li>{{__('ui.alcohol')}}: 13,5% vol.</li>
                        <li>{{__('ui.temp')}}: 16-18 °C.</li>
                    </ul>
                </div>
                
                <div data-aos="fade-left" data-aos-duration="1500" class="col-12 col-md-5 text-center img-card3-custom">
                    
                    {{-- <img class="img-section-custom shadow" src="media/bottiglia-singola.jpg" alt=""> --}}
                    
                </div>
                
            </div>
            
        </section>    
        
    </section>
    
    {{-- SEZIONE DICONO DI NOI --}}
    
    <section class="bg-body-custom mt-3 review_custom">
        
        <div class="row justify-content-around row-custom-aboutUS">
            
            <div class="col-12 d-flex my-5 align-items-center justify-content-center title_review">
                
                <h2 class="h3_review"> {{__('ui.aboutUs')}} </h2>
                
            </div>
            
            <div class="col-12 col-md-4 mb-5 text-center d-flex align-items-center flex-column divReviewCustom">
                
                <div class="card shadow d-flex justify-content-center">
                    
                    <img src="/media/Recensione1.jpg" class="img_recensione_custom" alt="">
                    
                    <p class="mt-3" style="font-style:italic"> Unica controindicazione, euforia irreversibile </p>
                    
                </div>
                
            </div>
            
            
            <div class="col-12 col-md-4 mb-5 text-center d-flex align-items-center flex-column divReviewCustom">
                
                <div class="card shadow d-flex justify-content-center">
                    
                    <img src="/media/Recensione2.jpg" class="img_recensione_custom" alt="">
                    
                    <p class="mt-3" style="font-style:italic"> Ottimo, anche sui dolci e per aperitivo! </p>
                    
                </div>
                
            </div>
            
            
            <div class="col-12 col-md-4 mb-5 text-center d-flex align-items-center flex-column divReviewCustom">
                
                <div class="card shadow d-flex justify-content-center">
                    
                    <img src="/media/Recensione3.jpg" class="img_recensione_custom" alt="">
                    
                    <p class="mt-3" style="font-style:italic"> Rende il tavolo elegante </p>
                    
                </div>
                
            </div>
            
            <div class="col-12 col-md-4 mb-5 text-center d-flex align-items-center flex-column divReviewCustom">
                
                <div class="card shadow d-flex justify-content-center align-items-center">
                    
                    <img src="/media/Recensione4.jpg" class="img_recensione_custom" alt="">
                    
                    <p class="mt-3" style="font-style:italic"> Accostamento perfetto … </p>
                    
                </div>
                
            </div>
            
            <div class="col-12 col-md-4 mb-5 text-center d-flex align-items-center flex-column divReviewCustom">
                
                <div class="card shadow d-flex justify-content-center align-items-center">
                    
                    <img src="/media/Recensione5.jpg" class="img_recensione_custom" alt="">
                    
                    <p class="mt-3" style="font-style:italic"> Un vino maschio per donne di carattere </p>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>
    
</x-layout>