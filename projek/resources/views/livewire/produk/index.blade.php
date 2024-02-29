<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">INVENTORY</h6>
                    </div>
                </div>
                <div class="col-md-12 p-5">
                    <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                    @include('livewire.produk.create')
                    @include('livewire.produk.edit')
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventory as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->nama}}</td>
                                    <td> {{"Rp " . number_format($item->harga, 0, ",", ".")  }}</td>
                                    <td>{{$item->stock}}</td>
                                    <td>
                                        <button data-bs-toggle="modal"
                                        data-bs-target="#editproduk" wire:click='edit({{$item->id}})' class="btn btn-icon btn-2 btn-info" type="button">
                                            <span class="btn-inner--icon"><i class="material-icons">edit</i></span>
                                        </button>
                                        <button wire:click='delete({{$item->id}})' class="btn btn-icon btn-2 btn-danger" type="button">
                                            <span class="btn-inner--icon"><i class="material-icons">delete</i></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
