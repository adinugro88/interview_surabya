
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel"><b>Tambah Produk</b> </h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Nama</label>
                                    <input wire:model.defer='nama'  type="text" class="@error('nama') is-invalid @enderror form-control">
                                    @error('nama')
                                    <span class="col-12 text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Harga</label>
                                    <input wire:model.defer='harga'  type="text" class=" @error('harga') is-invalid @enderror form-control">
                                    @error('harga')
                                    <span class="col-12 text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Stock</label>
                                    <input wire:model.defer='stock'  type="text" class=" @error('stock') is-invalid @enderror form-control">
                                    @error('stock')
                                    <span class="col-12 text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button wire:click="tambah"   class="btn bg-gradient-success">Save changes</button>
                </div>

            </div>
        </div>
    </div>

