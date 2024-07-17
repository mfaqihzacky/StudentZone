<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Ruang</th>
            <th>Hari</th>
            <th>Jam</th>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Ruang</th>
            <th>Hari</th>
            <th>Jam</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($matkul->jadwals as $jadwal)
            @foreach ($jadwal->waktus as $w)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jadwal->namaRuang }}</td>
                    <td>{{ $jadwal->hari }}</td>
                    <td>{{ $jamList[$w->jam] }}</td>
                    <td>
                        <form action="/matakuliah/{{ $matkul->id }}/jadwal/{{ $jadwal->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"
                                onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
