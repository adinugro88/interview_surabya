<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

    use HasFactory;
    protected $table = "inventories";
    protected $guarded = [];

    public function Pembelian()
    {
        return $this->hasOne(Pembelian::class,'inventory_id');
    }
    public function Penjualan()
    {
        return $this->hasOne(Penjualan::class,'inventory_id');
    }
}
