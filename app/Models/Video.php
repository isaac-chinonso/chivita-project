<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Video extends Model
{
    use HasFactory;

    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'source'
            ]
        ];
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function videolikes()
    {
        return $this->belongsToMany('App\Models\Videolike');
    }

}
