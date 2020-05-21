<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'author',
        'img_author',
        'body',
        'published'
    ];
}
