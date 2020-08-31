<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
    public function Clients ()
    {
        return $this->belongsTo('App\Clients');
    }
    
    public function Operations ()
    {
       return $this->hasMany('App\Operations');
    }
}
