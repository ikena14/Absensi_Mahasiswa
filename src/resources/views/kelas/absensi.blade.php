<form action="{{ route("absensi.tampil") }}" method="POST">
    @csrf
    <input type="hidden" name="kelasid" value="{{ $kelas->id }}">
    <div class="form-group">
        <label for="pertemuan"> Pertemuan</label>
        <select name="pertemuan" id="" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
        </select>
    </div>
    <input type="submit" value="Submit" class="btn btn-success float-right">
    <div class="clearfix"></div>
</form>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <td> Nama</td>
            <td> Pertemuan {{ $pertemuan }}</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($absensi as $item)
            <tr>
                <td>{{ $item->mahasiswa->name }}</td>
                <td><span class="text-uppercase">{{ $item->status }}</span></td>
            </tr>
        @endforeach
    </tbody>
</table>