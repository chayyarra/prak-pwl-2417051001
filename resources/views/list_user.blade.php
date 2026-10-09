@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold text-dark mb-0">Daftar Pengguna</h3>
            <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah User</a>
        </div>

        {{-- Memanggil Komponen Tabel Dinamis --}}
        <x-table :users="$users" />
    </div>
</div>
@endsection