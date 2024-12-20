@extends('layout.main')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Oil From Nation Wide!</li>
        </ol>

        <!-- Tabel Kupon -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light">
                <h5 class="mb-0">Daftar Kupon</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kupon</th>
                            <th>Jenis Diskon</th>
                            <th>Nilai Diskon</th>
                            <th>Tanggal Kedaluwarsa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coupons as $coupon)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $coupon->code }}</td>
                            <td>{{ $coupon->discount_type === \App\Models\Coupon::DISCOUNT_TYPE_PERCENTAGE ? 'Persentase' : 'Nominal' }}</td>
                            <td>
                                @if ($coupon->discount_type === \App\Models\Coupon::DISCOUNT_TYPE_PERCENTAGE)
                                    {{ $coupon->discount_value }}%
                                @else
                                    Rp. {{ number_format($coupon->discount_value, 0, ',', '.') }}
                                @endif
                            </td>
                            <td>{{ $coupon->expires_at ? \Carbon\Carbon::parse($coupon->expires_at)->format('d-m-Y') : 'Tidak ada' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
