<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">PEMBELIAN</h6>
                    </div>
                </div>
                <div class="col-md-12 p-5">
                    <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                    @include('livewire.pembelian.create')

                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembelian as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->Inventory->nama}}</td>
                                    <td>{{$item->jumlah}}</td>
                                    <td>
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
            @if (session()->has('message'))
            <div class="card my-4 col-md-6 p-3">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Transaksi Pembelian</h3>
                    </div>
                    <div class="col-md-6 align-right">
                        <button  class="btn btn-icon btn-2 btn-info" type="button text-right">
                            <span class="btn-inner--icon"><i class="material-icons">download</i></span> download
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">No.Transaksi </div>
                            <div class="col-md-6">{{str_pad($transaksi->id,5,'0',STR_PAD_LEFT)}}</div>
                            <div class="col-md-6">Barang</div>
                            <div class="col-md-6">{{$transaksi->Inventory->nama}}</div>
                            <div class="col-md-6">Jumlah Beli</div>
                            <div class="col-md-6">{{$transaksi->jumlah}}</div>
                            <div class="col-md-6">Harga</div>
                            <div class="col-md-6">{{$transaksi->Inventory->nama}}</div>
                            <div class="col-md-6">Total Pembelian</div>
                            <div class="col-md-6">{{"Rp " . number_format($transaksi->Inventory->harga * $transaksi->jumlah  , 0, ",", ".")  }}</div>
                                </div>
                    </div>

                </div>
            </div>
        @endif


        </div>
    </div>
</div>
