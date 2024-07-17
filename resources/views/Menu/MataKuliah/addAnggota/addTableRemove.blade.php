<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($matkul->anggota as $anggota)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $anggota->nim }}</td>
            <td>{{ $anggota->name }}</td>
            <td>{{ $anggota->email }}</td>
            <td>
                <form action="/matakuliah/{{ $matkul->id }}/user/{{ $anggota->id }}/remove" method="post" class="d-inline">
                    @csrf
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
