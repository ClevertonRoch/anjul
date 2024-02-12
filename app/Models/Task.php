<?php

namespace App\Models;

use App\Enums\PriorityType;
use App\Enums\StatusType;
use Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'priority',
        'deadline',
        'user_id'
    ];

    protected $casts = [
        'deadline' => 'date',
        'user_id' => 'integer',
        'status' => StatusType::class,
        'priority' => PriorityType::class,

    ];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }
}
