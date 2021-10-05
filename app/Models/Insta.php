<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insta extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'body'];

    public function instas()
    {
        return $this->hasMany('App\Models\Insta');
    }
}
