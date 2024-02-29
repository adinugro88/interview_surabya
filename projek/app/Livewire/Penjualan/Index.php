<?php

namespace App\Livewire\Penjualan;

use Livewire\Component;
use App\Models\Penjualan;
use App\Models\Inventory;

class Index extends Component
{
    public $produkdata;
    public $jumlah;
    public $penjualanid;
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


        $post = Penjualan::create([
            'Inventory_id'     => $this->produkdata,
            'jumlah'           => $this->jumlah,
        ]);

        $inventory = Inventory::findOrFail( $this->produkdata );
        $inventory->stock -= $this->jumlah;
        $inventory->save();
        session()->flash('message', 'output');
        $this->dispatch('close-modal');
        $this->transaksi = Penjualan::latest()->first();
        $this->resettext();
    }

    public function delete($id)
    {
        $penjualan = Penjualan::find($id);
        if($penjualan)
        {
            $penjualan->delete();
        }
        return redirect()->route('penjualan');
    }

    public function render()
    {
        $penjualan = Penjualan::latest()->get();
        $produk = Inventory::latest()->get();
        return view('livewire.penjualan.index',compact('penjualan','produk'));
    }
}
