<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function videolikes()
    {
        return $this->belongsToMany('App\Models\Videolike');
    }

}
