<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WarehouseCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function warehouseItems(): HasMany
    {
        return $this->hasMany(WarehouseItems::class, 'id_warehouse_category');
    }
}
