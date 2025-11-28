@extends('layouts.admin')

@section('title', 'Produk')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Manajemen Produk</h4>
    <a href="#" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Produk</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-success text-white">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center">Belum ada data</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
