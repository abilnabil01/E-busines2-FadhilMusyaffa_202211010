@extends('layouts.admin')

@section('title', 'User')

@section('content')
<h4 class="mb-3">Data User</h4>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="text-center">Belum ada data</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
