<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // Entry N - 1 User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
