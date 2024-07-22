<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Processes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_project',
        'name',
        'description',
        'start_date',
        'end_date',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Projects::class, 'id_project');
    }

    public function projectItems(): HasMany
    {
        return $this->hasMany(ProjectItems::class, 'id_process');
    }
}
