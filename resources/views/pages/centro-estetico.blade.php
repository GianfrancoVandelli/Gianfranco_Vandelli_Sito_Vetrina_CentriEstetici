@extends('layouts.app')

@section('title', 'Il Centro Estetico')

@section('content')  

<div class='hero'>
  <div class="hero-one"></div>
  <div class="hero-two"></div>
  <h1 class="header-title">Il nostro Centro Estetico</h1>
</div>

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
            <a href="/centro-estetico" class="btn btn-accent btn-lg px-4">
                CENTRO ESTETICO
            </a>
        </div>

    </div>


</section>

<section class="chi-siamo">
 <div class="container conbg" id="conbg">
  <div class="bg2" id="bg2">
    <div class="bg1" id="bg1">
      <div class="bg" id="bg">
        <div class="bg-text text-light ps-3">
          <h3>Personale esperto in trattamenti estetici</h3>
          <p>Rivolgiti allo staff del centro estetico per ricevere le migliori cure e trattamenti di ultima generazione per la cura dei tuoi piedi e delle tue mani. I professionisti del salone saranno sempre lieti di soddisfare ogni tipo di richiesta.</p>
          <a class="text-light" href="#bg1"><svg viewBox="0 0 448 512" width="30" fill="#fff" title="angle-double-right">
              <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
            </svg></a>
        </div>
      </div>
      <div class="bg-text text-light ps-3">
        <h3>Epilazione Laser</h3>
        <p>Trattamento di epilazione laser eseguito con apparecchiature professionali di ultima generazione, studiato per garantire risultati duraturi e il massimo rispetto della pelle</p>
        <a class="text-light" href="#bg2"><svg viewBox="0 0 448 512" width="30" fill="#fff" title="angle-double-right">
            <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
          </svg></a>
      </div>
    </div>
    <div class="bg-text text-light ps-3">
      <h3>Massaggi </h3>
      <p>Ogni trattamento combina tecniche manuali avanzate e prodotti selezionati per garantire rilassamento profondo, sollievo da tensioni muscolari e un miglioramento percepibile del benessere generale.</p>
      <a class="text-light" href="#conbg"><svg viewBox="0 0 448 512" width="30" fill="#fff" title="angle-double-right">
          <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
        </svg></a>
    </div>
  </div>
 </div>
</section>


<section class="car">

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active img1">
      </div>
      <div class="carousel-item img2">
      </div>
      <div class="carousel-item img3">
      </div>
    </div>

    <button class="carousel-control-prev  text-dark display-6" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <i class="bi bi-arrow-left-circle"></i>
    </button>
    <button class="carousel-control-next text-dark display-6" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <i class="bi bi-arrow-right-circle"></i>
    </button>
  </div>

</section>



@endsection
