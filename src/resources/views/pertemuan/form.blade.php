@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route("pertemuan.create") }}" method="POST">
            @csrf
            <input type="hidden" name="kelas_id" value="{{ $kelasid }}">
            <div class="form-group">
                <label for="pertemuan">Pertemuan</label>
                <input type="text" class="form-control @error('pertemuan')
                    is-invalid
                @enderror" name="pertemuan" value="{{ old("pertemuan") }}">
                @error('pertemuan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="" class="form-control @error('tanggal')
                    is-invalid
                @enderror" value="{{ old("tanggal") }}">
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="materi">Materi</label>
                <textarea name="materi" class="form-control @error('materi')
                    is-invalid
                @enderror" id="" cols="30" rows="10">{{ old("materi") }}</textarea>
                @error('materi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
            </div>
        </form>
    </div>
@endsection
