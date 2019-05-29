<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = "business";

    public function review()
    {
        return $this->hasMany('App\Review');
    }
}
