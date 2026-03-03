<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top py-3">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="/images/logo.png" alt="Logo" class="logo me-2">
            <span class="fw-bold fs-4">BeautyStudio</span>
        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('centro-estetico') }}">CENTRO ESTETICO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('trattamenti') }}">TRATTAMENTI VISO E CORPO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nailArt') }}">NAIL ART</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contatti') }}">CONTATTI</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <button class="btn btn-light px-4" data-bs-toggle="modal" data-bs-target="#bookingModal">
                        PRENOTA
                    </button>
                </li>
            </ul>
        </div>

    </div>
</nav>
