<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
