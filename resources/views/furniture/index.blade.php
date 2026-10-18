@extends('layouts.app')

@section('content')
<!-- Hero Section IKEA Style -->
<div class="bg-white border-bottom mb-5 py-5 shadow-sm">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <span class="ikea-price-badge mb-3">Koleksi 2026</span>
                <h1 class="display-4 fw-extrabold text-dark mb-3" style="font-weight: 900; letter-spacing: -1.5px;">
                    Buat Rumah Lebih Nyaman & Estetik.
                </h1>
                <p class="lead text-secondary mb-0" style="font-size: 1.15rem;">
                    Temukan pilihan sofa, meja makan, dan lemari pakaian bergaya Skandinavia dengan desain fungsional terbaik untuk hunian Anda.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="bg-light p-4 rounded-4 border text-start shadow-sm">
                    <span class="badge bg-danger mb-2">Paling Populer</span>
                    <h5 class="fw-bold text-dark mb-1">Gratis Ongkir & Pasang</h5>
                    <p class="small text-muted mb-0">Khusus pemesanan set perabot ruang tamu & kamar minggu ini.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pb-4">
    <div class="d-flex justify-content-between align-items-end mb-4 border-bottom pb-3">
        <div>
            <h3 class="fw-bold text-dark mb-1" style="font-weight: 800;">Katalog Produk Utama</h3>
            <p class="text-muted small mb-0">Pilih furniture impian Anda untuk setiap ruangan</p>
        </div>
        <span class="badge bg-dark rounded-pill px-3 py-2 fs-6">{{ count($furnitures) }} Pilihan</span>
    </div>

    <!-- Cards Grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($furnitures as $item)
        <div class="col">
            <div class="card h-100 ikea-card shadow-sm p-3">
                <!-- Image Wrapper -->
                <div class="position-relative overflow-hidden rounded-3 bg-light" style="height: 250px;">
                    <img src="{{ asset('assets/images/' . $item->image) }}" class="w-100 h-100" style="object-fit: cover;" alt="{{ $item->name }}">
                    <span class="position-absolute top-0 start-0 m-3 category-badge">{{ $item->category }}</span>
                </div>

                <!-- Card Content -->
                <div class="card-body px-1 pt-3 pb-0 d-flex flex-column">
                    <h5 class="fw-bold text-dark mb-1" style="font-size: 1.15rem;">{{ $item->name }}</h5>
                    <p class="small text-muted mb-3">{{ $item->material }}</p>

                    <div class="mt-auto d-flex align-items-center justify-content-between pt-3 border-top">
                        <div>
                            <div class="text-uppercase text-muted" style="font-size: 0.65rem; font-weight: 800;">Harga Normal</div>
                            <div class="ikea-price-badge">Rp {{ number_format($item->price, 0, ',', '.') }}</div>
                        </div>
                        <a href="{{ route('furniture.show', $item->id) }}" class="btn btn-ikea-blue shadow-sm">
                            Detail &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection