<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul', 'Nusantara Digital')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">
            <i class="bi bi-braces-asterisk text-primary"></i> Nusantara Digital
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    @yield('konten')
</main>

<footer class="bg-dark text-white-50 pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-5">
                <h5 class="text-white"><i class="bi bi-braces-asterisk text-primary"></i> Nusantara Digital</h5>
                <p>Membantu bisnis tumbuh lewat solusi digital yang rapi, cepat, dan terpercaya.</p>
            </div>
            <div class="col-md-3">
                <h6 class="text-white">Menu</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('beranda') }}" class="footer-link">Beranda</a></li>
                    <li><a href="{{ route('kontak') }}" class="footer-link">Kontak</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="text-white">Ikuti Kami</h6>
                <a href="#" class="footer-link fs-4 me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="footer-link fs-4 me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="footer-link fs-4"><i class="bi bi-github"></i></a>
            </div>
        </div>
        <hr class="border-secondary mt-4">
        <p class="text-center small mb-0">&copy; {{ date('Y') }} Nusantara Digital. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({ duration: 800, once: true });</script>
</body>
</html>