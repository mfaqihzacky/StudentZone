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
        @foreach ($tugas->anggota as $anggota)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $anggota->nim }}</td>
            <td>{{ $anggota->name }}</td>
            <td>{{ $anggota->email }}</td>
            <td>
                <button type="button" class="btn btn-danger"
                data-bs-toggle="modal"><i class="fa-solid fa-minus"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
