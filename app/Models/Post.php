<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'content',
        'path'
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public static function scopeLatest($query)
    {
        return $query->orderBy('id', 'asc')->get();
    }
}
