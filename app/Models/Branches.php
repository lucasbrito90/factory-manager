<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branches extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_customer',
        'name',
        'address',
        'phone',
    ];

    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customers::class, 'id_customer');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Projects::class, 'id_branch');
    }
}
