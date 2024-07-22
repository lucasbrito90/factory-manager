<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectItems extends Model
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
        'status',
        'current_sector',
        'status_current_sector'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Projects::class, 'id_project');
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Items::class, 'id_item');
    }

    public function process(): BelongsTo
    {
        return $this->belongsTo(Processes::class, 'id_process');
    }
}
