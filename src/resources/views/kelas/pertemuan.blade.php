<a href="{{ route('pertemuan.form',["kelasid" =>$kelas->id]) }}" class="btn btn-outline-success float-right mb-4"><i class="fas fa-plus"> Buat Pertemuan</i></a>
                <div class="clearfix"></div>
                @foreach ($kelas->pertemuan as $item)
                <div class="card mb-2">
                    <div class="card-body">
                        <h3><a href="{{ route("absensi.form",["id"=>$item->id]) }}"> Pertemuan {{$item->pertemuan}}</a></h3>
                        <span class="text-muted">Tanggal {{ $item->tanggal }}</span>
                        <p>{{ $item->materi }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route("pertemuan.hapus",["id"=> $item->id]) }}" onclick="return confirm('Anda Yakin Hapus?')"
                            class="btn btn-danger float-right"><i class="fas fa-trash"> Hapus</i></a>
                    </div>
                </div>
                @endforeach
