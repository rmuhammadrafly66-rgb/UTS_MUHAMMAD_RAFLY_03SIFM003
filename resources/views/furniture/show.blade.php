@extends('layouts.app')

@section('content')
<div class="container my-5">
    <a href="{{ route('furniture.index') }}" class="btn btn-outline-dark mb-4 rounded-pill px-4 fw-bold">&larr; Kembali ke Katalog</a>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden bg-white">
        <div class="row g-0">
            <!-- Left Image -->
            <div class="col-md-7 bg-light p-3">
                <div class="h-100 rounded-3 overflow-hidden" style="min-height: 420px;">
                    <img src="{{ asset('assets/images/' . $item->image) }}" class="w-100 h-100" style="object-fit: cover;" alt="{{ $item->name }}">
                </div>
            </div>

            <!-- Right Details -->
            <div class="col-md-5 p-4 p-lg-5 d-flex flex-column justify-content-between">
                <div>
                    <span class="category-badge mb-3 d-inline-block">{{ $item->category }}</span>
                    <h2 class="fw-bold text-dark mb-2" style="font-weight: 900;">{{ $item->name }}</h2>
                    <p class="text-muted small mb-4">Kode Perabot: #MÖBEL-00{{ $item->id }}</p>

                    <div class="bg-light p-3 rounded-3 mb-4 border">
                        <div class="text-uppercase text-muted small fw-bold mb-1">Harga Penawaran</div>
                        <div class="ikea-price-badge fs-3">Rp {{ number_format($item->price, 0, ',', '.') }}</div>
                    </div>

                    <h6 class="fw-bold text-uppercase text-dark mb-3 border-bottom pb-2">Spesifikasi Lengkap</h6>
                    <div class="mb-3 d-flex justify-content-between">
                        <span class="text-muted">Bahan / Material</span>
                        <span class="fw-bold text-dark">{{ $item->material }}</span>
                    </div>
                    <div class="mb-4 d-flex justify-content-between">
                        <span class="text-muted">Dimensi (P x L x T)</span>
                        <span class="fw-bold text-dark">{{ $item->dimensions }}</span>
                    </div>
                </div>

                <div>
                    <a href="https://wa.me/6281295750218?text=Halo,%20saya%20ingin%20memesan%20{{ urlencode($item->name) }}%20dengan%20harga%20Rp%20{{ number_format($item->price, 0, ',', '.') }}" 
                       target="_blank" 
                       class="btn btn-ikea-yellow btn-lg w-100 shadow d-flex align-items-center justify-content-center gap-2">
                       <span>💬</span>
                       <span>Pesan via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection