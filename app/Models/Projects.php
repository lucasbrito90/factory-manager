<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_branch',
        'name',
        'description',
        'start_date',
        'end_date',
    ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branches::class, 'id_branch');
    }

    public function projectItems(): HasMany
    {
        return $this->hasMany(ProjectItems::class, 'id_project');
    }

    public function processes(): HasMany
    {
        return $this->hasMany(Processes::class, 'id_project');
    }
}
