<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $guarded = false;

    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'id');
    }
}
