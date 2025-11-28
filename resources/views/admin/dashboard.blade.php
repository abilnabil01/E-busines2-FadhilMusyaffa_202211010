@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Card Produk -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-box fa-2x mb-2 text-success"></i>
                <h5>Total Produk</h5>
                <h3>54</h3>
            </div>
        </div>
    </div>

    <!-- Card Transaksi -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-shopping-cart fa-2x mb-2 text-warning"></i>
                <h5>Total Transaksi</h5>
                <h3>124</h3>
            </div>
        </div>
    </div>

    <!-- Card User -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-users fa-2x mb-2 text-primary"></i>
                <h5>Total User</h5>
                <h3>32</h3>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm border-0 mt-4">
    <div class="card-header bg-success text-white">Aktivitas Terbaru</div>
    <div class="card-body">
        <p>Belum ada aktivitas terbaru.</p>
    </div>
</div>
@endsection
