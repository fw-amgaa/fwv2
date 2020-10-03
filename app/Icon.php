<?php

namespace App\Icon;
use Eloquent;

class Icon extends Eloquent
{
    protected $table = 'icons';

    public function posts()
    {
        return $this->hasMany('TCG\Voyager\Models\Post');
    }

}