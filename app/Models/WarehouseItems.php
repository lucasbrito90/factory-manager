<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WarehouseItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_warehouse_category',
        'name',
        'description',
        'price',
        'quantity',
        'height',
        'width',
        'length',
        'available_stock',
        'minimum_stock',
        'unit_of_measurement'
    ];

    public function warehouseCategory(): BelongsTo
    {
        return $this->belongsTo(WarehouseCategories::class, 'id_warehouse_category');
    }

    public function warehouseItemTransactions(): HasMany
    {
        return $this->hasMany(WarehouseTransactions::class, 'id_warehouse_item');
    }
}
