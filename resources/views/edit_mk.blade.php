@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
            <div class="card-header bg-lilac py-3 border-0">
                <h2 class="h5 text-lilac-dark fw-bold mb-0">Edit Mata Kuliah</h2>
            </div>
            <div class="card-body p-4 bg-white">
                <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama_mk" class="form-label text-secondary fw-semibold">Nama Mata Kuliah</label>
                        <input type="text" id="nama_mk" name="nama_mk" class="form-control" value="{{ old('nama_mk', $mk->nama_mk) }}" required>
                        @error('nama_mk')
                            <small class="text-danger mt-1 d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="sks" class="form-label text-secondary fw-semibold">SKS</label>
                        <input type="number" id="sks" name="sks" class="form-control" value="{{ old('sks', $mk->sks) }}" required>
                        @error('sks')
                            <small class="text-danger mt-1 d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('matakuliah.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                        <button type="submit" class="btn btn-lilac px-4">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection