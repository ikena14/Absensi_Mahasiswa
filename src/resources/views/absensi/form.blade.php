@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Halaman Absensi</h1>
        <hr>
            <div class="visible-print text-center">
                    {!! QrCode::size(300)->generate(route("pertemuan.absensi", ["kode"=>$pertemuan->kode])); !!}
                <p>Scan me to return to the original page.</p>
            </div>
        <div class="text-center">Link absensi <a href="{{ route("pertemuan.absensi", ["kode"=>$pertemuan->kode]) }}"> {{ $pertemuan->kode }}</a></div>
        <div class="form-group">
            <label for="pertemuan"> Pertemuan</label>
            <input type="text" name="pertemuan" class="form-control"
                value="{{ $pertemuan->pertemuan }}">
        </div>
        <div class="form-group">
            <label for="tanggal"> Tanggal</label>
            <input type="date" name="tanggal" class="form-control"
            value="{{ $pertemuan->tanggal }}">
        </div>
        <div class="form-group">
            <label for="materi"> Materi</label>
            <textarea name="tangal" id="" class="form-control" cols="30" rows="10">{{ $pertemuan->materi }}
            </textarea>
        </div>
    </div>
@endsection
