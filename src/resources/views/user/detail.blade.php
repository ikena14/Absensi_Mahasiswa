@extends('layouts.app')
@section('content')
    <div class="container">
        <h1> Detail Peserta</h1>
        <hr>
            <div class="form-group">
                <label for="name"> Nama</label>
                <input type="text" name="name" class="form-control"
                value="{{ $mahasiswa->name }}">
            </div>
            <div class="form-group">
                <label for="email"> Email</label>
                <input type="text" class="form-control"
                value="{{ $mahasiswa->email }}">
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"> Kembali</i></a>
    </div>
@endsection
