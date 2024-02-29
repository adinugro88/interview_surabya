<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel"><b>Tambah Penjualan</b> </h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Produk</label>
                                <select wire:model.defer='produkdata' class="form-control"
                                    id="exampleFormControlSelect1">
                                    @foreach ( $produk as $item )
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Jumlah</label>
                                <input wire:model.defer='jumlah' type="text"
                                    class=" @error('jumlah') is-invalid @enderror form-control">
                                @error('jumlah')
                                <span class="col-12 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button wire:click="tambah" class="btn bg-gradient-success" data-bs-dismiss="modal">Save changes</button>
            </div>

        </div>
    </div>
</div>
