@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route ("kelas.create") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text"
                class="form-control @error('nama') is-invalid @enderror"
                name="nama"
                value={{ old('nama')}}>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="matakuliah">Mata Kuliah</label>
            <input type="text" name="matakuliah"
                class="form-control @error('matakuliah') is-invalid @enderror"
                value={{ old('matakuliah') }}>
            @error('matakuliah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="noruang">No Ruang</label>
            <input type="text" name="noruang"
                class="form-control @error('noruang') is-invalid @enderror"
                value={{ old('noruang') }}>
            @error('noruang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group float-right">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Simpan</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger" onclick="return confirm('Anda Yakin Simpan?')">
                <i class="fas fa-undo"></i> Batal </a>
        </div>
    </form>
    </div>
@endsection
