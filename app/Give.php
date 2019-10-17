<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Give extends Eloquent
{
    protected $connection = 'mongodb';
    protected $guarded =[];
}
