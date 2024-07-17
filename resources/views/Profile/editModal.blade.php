<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" role="dialog"
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
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="hidden" name="oldImage" value="{{ $user->image }}">
                        @if ($user->image)
                            <img src="{{ asset($user->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control @error('image') is-invalid @enderror" 
                        type="file" id="image" name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control form-control-user" name="nim" id="nim" required
                            value="{{ old('', $user->nim) }}" placeholder="Masukkan NIM Anggota Baru...">
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control form-control-user" name="name" id="name" required
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
                    {{-- <div class="form-group">
                        <input type="text" value="{{ $user->isAdmin }}" name="isAdmin" id="isAdmin" hidden>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
