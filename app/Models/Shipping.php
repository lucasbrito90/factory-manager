<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_branch',
        'estimated_delivery_date',
        'status',
        'tracking_number',
        'shipping_cost',
        'shipping_method',
        'shipping_address',
        'shipping_date'
    ];

    protected $table = 'shipments';

    public function branches(): BelongsTo
    {
        return $this->belongsTo(Branches::class, 'id_branch');
    }
}
