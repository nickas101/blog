<?php

namespace App;

use Moloquent;


class Post extends Moloquent
{
    protected $connection = 'mongodb';

    protected $fillable = ['title', 'text'];

}