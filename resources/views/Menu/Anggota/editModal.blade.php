<div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" aria-labelledby="editModal" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/anggota/{{ $user->id }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="m-3">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control form-control-user" name="nim" id="nim"
                            value="{{ old('', $user->nim) }}" placeholder="Masukkan NIM Anggota Baru...">
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control form-control-user" name="name" id="name"
                            value="{{ old('', $user->name) }}" placeholder="Masukkan Nama Anggota Baru...">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control form-control-user" name="email" id="email"
                            value="{{ old('', $user->email) }}" placeholder="Masukkan Alamat Email...">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                            name="isAdmin[]" id="isAdmin"
                            {{ $user->isAdmin === 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="isAdmin">isAdmin</label>
                        </div>
                        @error('isAdmin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
