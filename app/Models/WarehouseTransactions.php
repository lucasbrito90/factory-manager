<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WarehouseTransactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_warehouse_item',
        'quantity',
        'transaction_type',
        'transaction_date',
        'notes'
    ];

    public function warehouseItem(): BelongsTo
    {
        return $this->belongsTo(WarehouseItems::class, 'id_warehouse_item');
    }
}
