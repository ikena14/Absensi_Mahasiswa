@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('kelas.form') }}" class="btn btn-success float-right mb-4"><i class="fas fa-plus"></i> Buat Kelas Baru</a>
        <div class="clearfix"></div>
        <div class="row">
            @foreach ($kelas as $item)
            <div class="col-md-3">
                <div class="card mt-2">
                    <div class="card-header bg-primary text-white">
                        <h5><a href="{{ route("kelas.list",["id"=>$item->id]) }}" class="text-white"> {{$item->nama}}</a></h5>
                        <p>No Ruang {{$item->noruang}}</p>
                    </div>
                    <div class="card-body text-truncate bg-info text-white">
                        {{ $item->matakuliah }}
                    </div>
                    @cannot('bisa-hapus', $item)
                    <div class="card-footer bg-secondary">
                        <a href="{{ route("kelas.hapus",["id"=>$item->id]) }}"
                        class="btn btn-danger float-right"onclick="return confirm('Anda Yakin Hapus?')"
                        ><i class="fas fa-trash"></i></a>
                    </div>
                    @endcannot
                </div>
            </div>
            @endforeach
            @foreach ($mahasiswakelas as $item)
                <div class="col-md-3">
                    <div class="card mt-2">
                        <div class="card-header bg-success text-white">
                            <h5><a href="{{ route("kelas.list",["id" => $item->id ]) }}" class="text-white">{{ $item->nama }}</a></h5>
                            <p>No Ruang {{ $item->noruang }}</p>
                        </div>
                        <div class="card-body text-truncate">
                            {{ $item->matakuliah }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
