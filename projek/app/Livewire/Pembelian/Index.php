<?php

namespace App\Livewire\Pembelian;

use Livewire\Component;

use App\Models\Pembelian;
use App\Models\Inventory;

class Index extends Component
{
    public $produkdata;
    public $jumlah;
    public $pembelianid;
    public $transaksi;

    public function resettext()
    {
        $this->jumlah = '';
    }

    public function tambah()
    {
        $this->validate([
            'produkdata'   => 'required',
            'jumlah' => 'required',
        ]);


        $post = Pembelian::create([
            'Inventory_id'     => $this->produkdata,
            'jumlah'           => $this->jumlah,
        ]);

        $inventory = Inventory::findOrFail( $this->produkdata );
        $inventory->stock += $this->jumlah;
        $inventory->save();
        session()->flash('message', 'output');
        $this->dispatch('close-modal');
        $this->transaksi = Pembelian::latest()->first();
        $this->resettext();
    }


    public function delete($id)
    {
        $pembelian = Pembelian::find($id);
        if($pembelian)
        {
            $pembelian->delete();
        }
        return redirect()->route('pembelian');
    }




    public function render()
    {
        $pembelian = Pembelian::latest()->get();
        $produk = Inventory::latest()->get();
        return view('livewire.pembelian.index',compact('pembelian','produk'));
    }
}
