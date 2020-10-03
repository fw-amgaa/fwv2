<?php

namespace App\Color;
use Eloquent;

class Color extends Eloquent
{
    protected $table = 'colors';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

}