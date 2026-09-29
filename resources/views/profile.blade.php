@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-sm border-0 p-4 text-center align-items-center">
            <!-- Lingkaran Avatar Profile -->
            <div class="rounded-circle bg-light border d-flex align-items-center justify-content-center mb-4" style="width: 120px; height: 120px;">
                <svg class="text-secondary" style="width: 70px; height: 70px;" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>

            <!-- Kotak Informasi -->
            <div class="w-100 d-flex flex-column gap-3">
                <div class="bg-light py-2 px-3 rounded text-dark fw-medium border">
                    Nama: {{ $nama }}
                </div>
                <div class="bg-light py-2 px-3 rounded text-dark fw-medium border">
                    Kelas: {{ $kelas }}
                </div>
                <div class="bg-light py-2 px-3 rounded text-dark fw-medium border">
                    NPM: {{ $npm }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection