<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'suppliers_id',
        'user_id',
        'order_date',
        'estimated_delivery_date',
    ];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Suppliers::class, 'suppliers_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function receiving(): HasOne
    {
        return $this->hasOne(Receiving::class, 'purchase_order_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(ProductPurchaseOrder::class, 'purchase_order_id');
    }

    public function suppliers(): BelongsToMany
    {
        return $this->belongsToMany(Suppliers::class, 'supplier_purchase_order');
    }
}
