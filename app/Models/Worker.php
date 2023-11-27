<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Worker extends Model
{
    protected $guarded = false;

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class, 'worker_id', 'id');
    }
}
