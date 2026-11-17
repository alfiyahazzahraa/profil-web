@extends('layouts.app')

@section('judul', 'Kontak - Nusantara Digital')

@section('konten')

{{-- BANNER --}}
<section class="page-header text-center" style="background-image: url('https://picsum.photos/id/1015/1600/600');">
    <div class="container">
        <h1 class="fw-bold">Hubungi Kami</h1>
        <p class="mb-0">Kami senang mendengar kabar darimu</p>
    </div>
</section>

<div class="container py-5">

    @if (session('sukses'))
        <div class="alert alert-success">{{ session('sukses') }}</div>
    @endif

    <div class="row g-5">

        {{-- INFO KONTAK --}}
        <div class="col-md-5" data-aos="fade-right">
            <h4 class="fw-bold mb-3">Informasi Kontak</h4>
            <p class="text-muted">Ada pertanyaan atau mau diskusi proyek? Kirim pesan atau hubungi kami langsung.</p>
            <ul class="list-unstyled">
                <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Yogyakarta, Indonesia</li>
                <li class="mb-3"><i class="bi bi-envelope-fill text-primary me-2"></i>halo@nusantaradigital.test</li>
                <li class="mb-3"><i class="bi bi-telephone-fill text-primary me-2"></i>0812-0000-0000</li>
            </ul>
        </div>

        {{-- FORM --}}
        <div class="col-md-7" data-aos="fade-left">
            <div class="card shadow-sm border-0 p-4">
                <form action="{{ route('kontak.kirim') }}" method="POST" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama"
                               class="form-control @error('nama') is-invalid @enderror"
                               value="{{ old('nama') }}">
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email"
                               class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="5"
                                  class="form-control @error('pesan') is-invalid @enderror">{{ old('pesan') }}</textarea>
                        @error('pesan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send me-1"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>

    </div>

    {{-- PETA --}}
    <div class="mt-5 rounded-4 overflow-hidden shadow-sm" data-aos="fade-up">
        <iframe src="https://www.google.com/maps?q=Yogyakarta&output=embed"
                width="100%" height="350" style="border:0;" loading="lazy"></iframe>
    </div>

</div>

@endsection