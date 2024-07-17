<div class="modal fade" id="editPasswordModal" tabindex="-1" aria-labelledby="editModal" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="m-3">
                    <div class="form-group">
                        <label>Password Lama</label>
                        <input type="password" class="form-control form-control-user" name="passwordLama" id="passwordLama">
                        {{-- value="{{ old('', auth()->user()->password) }}" placeholder="Masukkan Password Baru..." --}}
                        @error('passwordLama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="text" class="form-control form-control-user" name="passwordBaru" id="passwordBaru">
                        {{-- value="{{ old('', auth()->user()->password) }}" placeholder="Masukkan Password Baru..." --}}
                        @error('passwordBaru')
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
