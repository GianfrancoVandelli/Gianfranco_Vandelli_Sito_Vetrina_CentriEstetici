@extends('layouts.app')

@section('title', 'Centro Estetico - Home')

@section('content')

{{-- SEZIONE HERO INIZIO --}}

<section class="inizio-hero-section position-relative"> 
    <img src="/images/hero2.jpg" class="inizio-hero-img"> 
    <div class="inizio-hero-overlay d-flex align-items-center">
        <div class="container text-white">
        <div class="row">
            <div class="col-lg-7">
            <h1 class="display-4 fw-bold">Ritrova la tua bellezza</h1>
            <p class="lead mb-4">Trattamenti esclusivi, prodotti selezionati e un’esperienza su misura.</p>
            <a class="btn btn-lg btn-light me-2" href="{{ route('trattamenti') }}">SCOPRI I TRATTAMENTI</a>
            <button class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#bookingModal">PRENOTA ORA</button>
            </div>
        </div>
        </div>
    </div>
</section>

{{-- SEZIONE HERO INIZIO --}}


{{-- SEZIONE CENTRO ESTETICO INIZIO --}}

<section class="about-section py-5">
    <div class="container">

        <!-- ICONS -->
        <div class="row text-center mb-4">
            <div class="col-6 col-md-3 mb-3">
                <i class="bi bi-flower3 about-icon"></i>
                <p class="fw-semibold mt-2">Trattamenti Viso e Corpo</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <i class="bi bi-stars about-icon"></i>
                <p class="fw-semibold mt-2">Epilazione Laser</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <i class="bi bi-heart-pulse about-icon"></i>
                <p class="fw-semibold mt-2">Massaggi</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <i class="bi bi-brush about-icon"></i>
                <p class="fw-semibold mt-2">Nail Art</p>
            </div>
        </div>

        <!-- TITLE -->
        <h2 class="text-center fw-bold mb-3">
            Un avanzato centro estetico e benessere
        </h2>

        <!-- TEXT -->
        <p class="text-center mx-auto about-text mb-4">
            Il nostro centro estetico è la tua nuova oasi di bellezza dove, grazie alla professionalità
            del nostro staff e alle tecnologie di ultima generazione, potrai vivere momenti di puro relax
            e scegliere tra un’ampia gamma di trattamenti per viso e corpo.
        </p>

        <p class="text-center mx-auto about-text mb-4">
            Offriamo epilazione laser, massaggi, solarium, estetica mani e piedi, make-up professionale,
            trattamenti ciglia e sopracciglia e molto altro. Qualità elevata, prezzi accessibili e
            promozioni durante tutto l’anno.
        </p>

        <!-- BUTTON -->
        <div class="text-center">
            <a href="{{ route('centro-estetico') }}" class="btn btn-accent btn-lg px-4">
                CENTRO ESTETICO
            </a>
        </div>

    </div>
</section>

{{-- SEZIONE CENTRO ESTETICO FINE --}}


{{-- SEZIONE PROMO INIZIO --}}

<div class="blog-card spring-fever">
  <div class="title-content">
    <h3>Offerte Invernali</h3>
  </div>
  <div class="card-info">
    <p>Manicure : 15 euro</p>
    <p>Pedicure : 15 euro</p>
    <p>Massaggi : 50 euro</p>
    <p>Epilazione Laser : 50 euro</p>
  </div>
  <div class="gradient-overlay"></div>
  <div class="color-overlay"></div>
</div>

{{-- SEZIONE PROMO FINE --}}


{{-- SEZIONE TRATTAMENTI INIZIO --}}
<h2 class="text-treatments">I NOSTRI TRATTAMENTI </h2>
<div class="tl-container ps-3 pe-3">
  <div class="main-timeline">
    <div class="timeline left">
      <div class="card tl-card origin-right">
        <div class="tl-img-container image-1 scale"></div>
        <div class="card-body p-0">
          <div class="accordion" id="alwaysOpen-1">
            <div class="accordion-item">
              <p class="accordion-header">
                <button class="accordion-button fw-bold justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fa-solid fa-lightbulb fa-lg me-2"></i>Epilazione Laser
                </button>
              </p>
              <div id="collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <p class="fw-light p-2">L’epilazione laser è una tecnica avanzata di rimozione dei peli che permette risultati a lungo termine e, nel tempo, una riduzione molto significativa della peluria. È adatta a diverse zone del corpo come gambe, inguine, ascelle, viso e schiena.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="icons d-flex justify-content-center m-3">
              <a class="icon-link" title="More Info" aria-label="More Info" href="{{ route('trattamenti') }}">
                <i class="fa-solid fa-info fa-md"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline right">
      <div class="card tl-card origin-left">
        <div class="tl-img-container image-2 scale"></div>
        <div class="card-body p-0">
          <div class="accordion" id="alwaysOpen-2">
            <div class="accordion-item">
              <p class="accordion-header">
                <button class="accordion-button fw-bold justify-content-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fa-solid fa-signs-post fa-lg me-2"></i>Massaggi
                </button>
              </p>
              <div id="collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p class="fw-light p-2">I nostri massaggi sono pensati per offrire un’esperienza di benessere completa, che unisce tecniche professionali, manualità esperte e un approccio personalizzato. Ogni trattamento nasce per ristabilire equilibrio, sciogliere le tensioni e migliorare l’aspetto e la salute della pelle. Le nostre estetiste specializzate utilizzano metodiche mirate che favoriscono la circolazione, il drenaggio dei liquidi, la distensione muscolare e una profonda sensazione di rilassamento.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="icons d-flex justify-content-center m-3">
              <a class="icon-link" title="More Info" aria-label="More Info" href="{{ route('trattamenti') }}">
                <i class="fa-solid fa-info fa-md"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline left">
      <div class="card tl-card origin-right">
        <div class="tl-img-container image-3 scale"></div>
        <div class="card-body p-0">
          <div class="accordion" id="alwaysOpen-3">
            <div class="accordion-item">
              <p class="accordion-header">
                <button class="accordion-button fw-bold justify-content-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  <i class="fa-solid fa-pencil fa-lg me-2"></i>Nail Art
                </button>
              </p>
              <div id="collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p class="fw-light p-2">La manicure è un trattamento completo dedicato alla salute e all’estetica delle mani. Comprende la cura delle unghie, la gestione delle cuticole, l’armonizzazione della forma e un massaggio idratante che migliora la morbidezza e l’aspetto della pelle. È un rituale che unisce estetica e benessere, ideale per mantenere mani curate, luminose e piacevoli al tatto. Il pedicure è un trattamento dedicato alla cura dei piedi, spesso trascurati ma fondamentali per il benessere quotidiano. Migliora l’aspetto della pelle, previene ispessimenti e dona una sensazione di leggerezza. È un vero momento di relax che unisce estetica e salute.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="icons d-flex justify-content-center m-3">
              <a class="icon-link" title="More Info" aria-label="More Info" href="{{ route('trattamenti') }}">
                <i class="fa-solid fa-info fa-md"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>

{{-- SEZIONE TRATTAMENTI FINE --}}

{{-- SEZIONE PRODOTTI INIZIO --}}


<div class="container-prodotti">
  <section class="intro"></section>

    <div class="meta">
      <div class="meta__inner">
        <h3>I nostri Prodotti</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo fugiat ad quae amet dignissimos laborum, repellat maxime ipsa ipsam nisi</p>
      </div>
    </div>
</div>

{{-- SEZIONE PRODOTTI FINE --}}


{{-- SEZIONE ORARI INIZIO --}}
<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

<div class="container-orari">
  <div class="overlay-orari">
    <h1>ORARI DI APERTURA</h1>
    <p>LUN / VEN : <br>08:00/19:00</p>
    <p>SAB : <br>08:00/19:00</p>
  </div>
</div>

{{-- SEZIONE ORARI FINE --}}


{{-- SEZIONE TESTIMONIANZE INIZIO --}}

      <section class="py-5">
         <div class="container">
            
            <!--  Block !-->
            <div class="bg-offset-hero position-relative p-4 py-md-5">
               <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center align-items-center">
                  <!--  Column !-->
                  <div class="col-md-4">
                     <div class="position-relative text-white px-0 px-md-4 px-lg-5 text-center text-md-end">
                        <!--  Icon !-->
                        <span class="d-block quote_">
                           <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                              <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                           </svg>
                        </span>
                           <!--  Text !-->
                        <h3 class="fs-1 fw-light mb-4">Dicono di noi</h3>
                     </div>
                  </div>
                  <!--  Column !-->
                  <div class="col-md-8">
                     <div id="testimonials" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="bg-dark rounded-3 text-white p-4 p-md-5 position-relative">
                                 <!--  Icon !-->
                                 <span class="d-block position-absolute top-0 start-50 translate-middle-x text-muted quote_">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                       <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                                    </svg>
                                 </span>
                                 <div class="row g-4">
                                    <!--  Text !-->
                                    <div class="col-md-9">
                                       <!--  Text !-->
                                       <p class="lead mb-0">"Questo centro estetico è il migliore che abbia frequentato in quattro anni che applico gel sulle mani. Oltre ad essere fantastiche sul proprio lavoro ,sono anche empatiche simpatiche e gentili ." </p>
                                       <span class="d-block text-warning mt-3 mb-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                             <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"></path>
                                          </svg>
                                       </span>
                                       <h4 class="fs-5 fw-bold mb-0">Martina Della Bona</h4>
                                       <a class="text-decoration-none" href="#">Google</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="bg-dark rounded-3 text-white p-4 p-md-5 position-relative">
                                 <!--  Icon !-->
                                 <span class="d-block position-absolute top-0 start-50 translate-middle-x text-muted quote_">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                       <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                                    </svg>
                                 </span>
                                 <div class="row g-4">
                                    <!--  Text !-->
                                    <div class="col-md-9">
                                       <!--  Text !-->
                                       <p class="lead mb-0">"Centro molto professionale. Ho fatto massaggi e pressoterapia e ho avuto ottimi risultati in poco tempo.</p>
                                       <span class="d-block text-warning mt-3 mb-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                             <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"></path>
                                          </svg>
                                       </span>
                                       <h4 class="fs-5 fw-bold mb-0">Rosa De Vincenzo</h4>
                                       <a class="text-decoration-none" href="#">Google</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-indicators position-relative mt-4">
                           <button type="button" data-bs-target="#testimonials" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                           <button type="button" data-bs-target="#testimonials" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

{{-- SEZIONE TESTIMONINAZE FINE --}}





@endsection
