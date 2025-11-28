@extends('layouts.admin')

@section('title', 'Transaksi')

@section('content')
<h4 class="mb-3">Data Transaksi</h4>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center">Belum ada transaksi</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
