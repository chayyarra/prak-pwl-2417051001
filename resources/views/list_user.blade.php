@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold text-dark mb-0">Daftar Pengguna</h3>
            <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah User</a>
        </div>

        {{-- Memanggil Komponen Tabel Dinamis --}}
        <x-table :users="$users" />
    </div>
</div>
@endsection