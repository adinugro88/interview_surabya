<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Inventory()
    {
        return $this->belongsto(Inventory::class,'inventory_id');
    }
}
