<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Containers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_shelf',
        'id_shipping',
        'code',
        'estimated_delivery_date',
    ];

    public function shelf(): BelongsTo
    {
        return $this->belongsTo(Shelves::class, 'id_shelf');
    }

    public function shipping(): BelongsTo
    {
        return $this->belongsTo(Shipping::class, 'id_shipping');
    }

    public function projectItems(): HasManyThrough
    {
        return $this->hasManyThrough(ProjectItems::class, Items::class);
    }
}
