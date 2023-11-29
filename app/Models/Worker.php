<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Worker extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class, 'worker_id', 'id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }
}
