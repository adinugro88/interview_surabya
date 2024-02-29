<?php

namespace App\Livewire\Produk;

use Livewire\Component;
use App\Models\Inventory;

class Index extends Component
{

    public $nama='';
    public $harga='';
    public $stock='';
    public $inventoryid;

    public function edit($id)
    {
        $inventory = Inventory::find($id);
        if($inventory) {
            $this->inventoryid  = $inventory->id;
            $this->nama         = $inventory->nama;
            $this->harga        = $inventory->harga;
            $this->stock        = $inventory->stock;
        }
    }

    public function resettext()
    {
        $this->nama = '';
        $this->harga= '';
        $this->stock= '';
    }

    public function update()
    {
        $this->validate([
            'nama'   => 'required',
            'harga' => 'required',
            'stock' => 'required',
        ]);
        if($this->inventoryid) {
            $inventory = Inventory::find($this->studentid);

            if($student) {
                $student->update([
                    'nama'    => $this->nama,
                    'harga'   => $this->harga,
                    'stock'   => $this->stock
                ]);
            }
        }
        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');
        $this->resettext();
           //redirect
           return redirect()->route('home');
    }

    public function delete($id)
    {
        $inventory = Inventory::find($id);
        if($inventory)
        {
            $inventory->delete();
        }
        return redirect()->route('home');
    }



    public function tambah()
    {
        $this->validate([
            'nama'   => 'required',
            'harga' => 'required',
        ]);

         if($this->stock==''){
            $post = Inventory::create([
                'nama'     => $this->nama,
                'harga'   => $this->harga,
                'stock'   => 5
            ]);
        }
        else
        {
            $post = Inventory::create([
                'nama'     => $this->nama,
                'harga'   => $this->harga,
                'stock'   => $this->stock
            ]);
        }

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('home');

    }
    public function render()
    {
        $inventory = Inventory::latest()->get();
        return view('livewire.produk.index',compact('inventory'));
    }
}
