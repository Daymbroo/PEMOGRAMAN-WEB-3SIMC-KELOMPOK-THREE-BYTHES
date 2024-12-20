@extends('layout.main')

@section('content')
<div class="container mt-4">
    <!-- Card with shadow and border styling -->
    <div class="card shadow-lg rounded-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Detail Produk</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Product Image Section -->
                <div class="col-md-4">
                    <img src="{{ $produk->foto ? url('image/' . $produk->foto) : url('image/nophoto.jpg') }}" 
                         class="img-fluid rounded shadow-sm" alt="Product Image">
                </div>
                <!-- Product Details Section -->
                <div class="col-md-8">
                    <h4 class="text-primary">{{ $produk->nama }}</h4>
                    <p><strong>Kategori:</strong> {{ $produk->kategori }}</p>
                    <p><strong>Harga Jual:</strong> <span class="badge bg-success">Rp{{ number_format($produk->harga_jual, 2, ',', '.') }}</span></p>
                    <p><strong>Harga Beli:</strong> <span class="badge bg-danger">Rp{{ number_format($produk->harga_beli, 2, ',', '.') }}</span></p>
                    <p><strong>Deskripsi:</strong> {{ $produk->deskripsi ?? 'No description' }}</p>
                </div>
            </div>

            <!-- Back Button with styling -->
            <a href="{{ route('index.index') }}" class="btn btn-primary mt-3">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection 
