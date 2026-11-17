@extends('layouts.app')

@section('judul', 'Beranda - Nusantara Digital')

@section('konten')

{{-- HERO --}}
<section class="hero" style="background-image: url('https://picsum.photos/id/0/1600/900');">
    <div class="container">
        <div class="col-lg-7" data-aos="fade-right">
            <span class="badge bg-primary mb-3 px-3 py-2">Software House Yogyakarta</span>
            <h1 class="display-4 fw-bold">Solusi Digital untuk Bisnismu</h1>
            <p class="lead mb-4">Kami membantu UMKM dan perusahaan membangun kehadiran online yang rapi, cepat, dan profesional.</p>
            <a href="{{ route('kontak') }}" class="btn btn-primary btn-lg me-2">Hubungi Kami</a>
            <a href="#layanan" class="btn btn-outline-light btn-lg">Lihat Layanan</a>
        </div>
    </div>
</section>

{{-- TENTANG --}}
<section class="container py-5 my-4">
    <div class="row align-items-center g-5">
        <div class="col-md-6" data-aos="fade-right">
            <img src="https://picsum.photos/id/180/800/600" class="img-fluid rounded-4 shadow" alt="Tim kami">
        </div>
        <div class="col-md-6" data-aos="fade-left">
            <h2 class="fw-bold mb-3">Tentang Kami</h2>
            <p class="text-muted">Nusantara Digital adalah tim kecil yang berfokus pada pembuatan website dan aplikasi web yang sesuai kebutuhan klien, dengan harga masuk akal dan hasil yang bisa dipertanggungjawabkan.</p>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Desain modern dan responsif</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Dikerjakan tepat waktu</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Dukungan setelah proyek selesai</li>
            </ul>
        </div>
    </div>
</section>

{{-- LAYANAN --}}
<section id="layanan" class="bg-light py-5">
    <div class="container py-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Layanan Kami</h2>
            <p class="text-muted">Apa saja yang bisa kami bantu untuk bisnismu</p>
        </div>
        <div class="row g-4">
            @foreach ([
                ['bi-laptop', 'Website Profil', 'Tampilan profesional untuk memperkenalkan bisnismu.'],
                ['bi-gear', 'Aplikasi Web', 'Sistem kustom sesuai kebutuhan operasional.'],
                ['bi-chat-dots', 'Konsultasi IT', 'Diskusi solusi teknologi yang tepat sasaran.'],
            ] as $i => [$ikon, $judul, $deskripsi])
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $i * 150 }}">
                    <div class="card service-card h-100 shadow-sm text-center p-4">
                        <div class="icon-circle mx-auto mb-3"><i class="bi {{ $ikon }}"></i></div>
                        <h5 class="fw-bold">{{ $judul }}</h5>
                        <p class="text-muted mb-0">{{ $deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- STATISTIK --}}
<section class="stat-section py-5">
    <div class="container">
        <div class="row text-center g-4">
            @foreach ([['50+', 'Proyek Selesai'], ['30+', 'Klien Puas'], ['5', 'Tahun Pengalaman'], ['24/7', 'Dukungan']] as [$angka, $label])
                <div class="col-6 col-md-3" data-aos="zoom-in">
                    <h2 class="fw-bold display-5">{{ $angka }}</h2>
                    <p class="mb-0">{{ $label }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="container text-center py-5 my-4" data-aos="fade-up">
    <h2 class="fw-bold">Siap memulai proyekmu?</h2>
    <p class="text-muted">Ceritakan idemu, kami bantu wujudkan.</p>
    <a href="{{ route('kontak') }}" class="btn btn-primary btn-lg">Hubungi Kami Sekarang</a>
</section>

@endsection