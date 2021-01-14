<h2 class="text-success">Dosen </h2>
                <ul class="list-group">
                    <li class="list-group-item"> {{ $kelas->dosen->name }}</li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between mt2">
                    <h2 class="text-success">Mahasiswa</h2>
                <div>
                    <span class="text-muted">{{ $kelas->mahasiswa->count() }} Mahasiswa</span>
                    <a href="{{ route("peserta.invite",["kode" => $kelas->kode]) }}" class="btn btn-outline-dark"><i class="fas fa-user-plus"></i></a>
                </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                <ul class="list-group">
                   @foreach ($kelas->mahasiswa as $item)
                   <div class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route("peserta.detail",["id"=>$item->id]) }}"> {{ $item->name }} </a>
                    <a href="{{ route("kelas.hapus.mahasiswa", [
                        "kelasid"=>$kelas->id,
                        "mahasiswaid"=>$item->id
                        ]) }}" class="btn btn-danger" onclick="return confirm('Anda Yakin Hapus Mahasiswa?')">
                        <i class="fas fa-trash"> Hapus</i></a>
                </div>
                   @endforeach
                </ul>
