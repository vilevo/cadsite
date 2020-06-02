<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function investisseurs()
    {
        return $this->belongsToMany('App\User');
    }
}
