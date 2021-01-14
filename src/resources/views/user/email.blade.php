@extends('layouts.app')
@section('content')
    <div class="container">
        <h1> Undang Mahasiswa</h1>
        <hr>
        <form action="{{ route("peserta.undang") }}" method="POST">
            @csrf
            <input type="hidden" name="kode" value="{{ $kode }}">
            <div class="form-group">
                <label for="email"> Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group d-flex justify-content-between">
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-arrow-left"> Kembali</i></a>
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-user-plus"></i> Undang
                </button>
            </div>
        </form>
    </div>
@endsection
