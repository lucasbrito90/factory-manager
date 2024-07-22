<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Receiving extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_order_id',
        'received_date',
        'tracking_number',
        'shipping_cost',
        'shipping_method',
        'delivery_company',
        'driver',
        'status',
        'status',
    ];

    public function purchaseOrder(): BelongsTo
    {
        return $this->belongsTo(PurchaseOrder::class, 'purchase_order_id');
    }
}
