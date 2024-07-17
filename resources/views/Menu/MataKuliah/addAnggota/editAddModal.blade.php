<div class="modal fade" id="editAddModal{{ $matkul->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Anggota</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        @include('Menu.MataKuliah.addAnggota.addTableAdd')
                    </div>
                    <div class="col">
                        @include('Menu.MataKuliah.addAnggota.addTableRemove')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
