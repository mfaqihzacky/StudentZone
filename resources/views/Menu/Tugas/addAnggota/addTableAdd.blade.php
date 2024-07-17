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
        {{-- {{ $attachedUserIds = $matkul->anggota()->pluck('users.id')->toArray() }}
        {{ $unattachedUsers = User::whereNotIn('id', $attachedUserIds)->get() }}
        {{ dd([$attachedUserIds, $unattachedUsers]) }} --}}
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->nim }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="/tugas/{{ $tugas->id }}/user/{{ $user->id }}" method="post" class="d-inline">
                    @csrf
                    <button class="btn btn-success  ">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

