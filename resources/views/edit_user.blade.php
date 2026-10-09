@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
            <div class="card-header bg-lilac py-3 border-0">
                <h2 class="h5 text-lilac-dark fw-bold mb-0">Edit User</h2>
            </div>
            <div class="card-body p-4 bg-white">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label text-secondary fw-semibold">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $user->nama) }}" required>
                        @error('nama')
                            <small class="text-danger mt-1 d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label text-secondary fw-semibold">NPM</label>
                        <input type="text" id="npm" name="npm" class="form-control" value="{{ old('npm', $user->npm ?? $user->nim) }}" required>
                        @error('npm')
                            <small class="text-danger mt-1 d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label text-secondary fw-semibold">Kelas</label>
                        <select name="kelas_id" id="kelas_id" class="form-select" required>
                            @foreach($kelas as $k)
                                <option value="{{ $k->id }}" {{ (old('kelas_id', $user->kelas_id) == $k->id) ? 'selected' : '' }}>
                                    {{ $k->nama_kelas }}
                                </option>
                            @endforeach
                        </select>
                        @error('kelas_id')
                            <small class="text-danger mt-1 d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('user.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                        <button type="submit" class="btn btn-lilac px-4">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection