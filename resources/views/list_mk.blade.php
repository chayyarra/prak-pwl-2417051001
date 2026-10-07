@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            {{-- Header & Tombol Tambah --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h4 fw-bold text-dark m-0">Daftar Mata Kuliah</h2>
                <a href="{{ route('matakuliah.create') }}" class="btn btn-primary btn-sm px-3">
                    + Tambah Mata Kuliah
                </a>
            </div>

            {{-- Pesan Sukses / Alert --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Tabel Data --}}
            <div class="table-responsive">
                <table class="table table-hover align-middle border">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" style="width: 30%;">ID</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col" class="text-center" style="width: 15%;">SKS</th>
                            <th scope="col" class="text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mks as $mk)
                            <tr>
                                <td class="text-muted small"><code>{{ $mk->id }}</code></td>
                                <td class="fw-semibold text-dark">{{ $mk->nama_mk }}</td>
                                <td class="text-center">
                                    <span class="badge bg-info text-dark">{{ $mk->sks }} SKS</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-inline-flex gap-2">
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm fw-medium">
                                            Edit
                                        </a>
                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm fw-medium" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    Belum ada data mata kuliah.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection