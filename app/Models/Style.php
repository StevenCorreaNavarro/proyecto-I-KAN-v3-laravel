<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;
    public function chances()
    {
        return $this->belongsToMany('App\Models\Chance');
    }
}
