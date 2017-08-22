<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $fillable = ['name', 'brand', 'published'];
    public $timestamps = false;
}
