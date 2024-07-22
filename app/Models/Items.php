<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_project',
        'name',
        'description',
        'start_date',
        'end_date',
        'price',
        'quantity',
        'height',
        'width',
        'length',
        'weight',
        'id_item',
        'id_container',
    ];

    public function container(): BelongsTo
    {
        return $this->belongsTo(Containers::class, 'id_container');
    }
}
