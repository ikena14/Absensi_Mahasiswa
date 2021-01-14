@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pertemuan">Pertemuan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#peserta">Peserta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#absensi">Absensi</a>
            </li>
        </ul>

        <div class="jumbotron bg-dark text-white">
            <h1>{{ $kelas->matakuliah }} ({{ $kelas->nama }})</h1>
            <h5>No Ruang  {{ $kelas->noruang }}</h5>
            <p>Kode Kelas : <a href="{{ route("kelas.join.mahasiswa", ["kode"=>$kelas->kode]) }}"
                class="text-white">{{ $kelas->kode }}</a></p>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" role="tabpanel" id="pertemuan">
                @include('kelas.pertemuan')
            </div>
            <div class="tab-pane fade" role="tabpanel" id="peserta">
                @include('kelas.peserta')
            </div>
            <div class="tab-pane fade" role="tabpanel" id="absensi">
                @include('kelas.absensi')
            </div>
        </div>
    </div>
@endsection
