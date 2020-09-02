<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
    protected $fillable = ['numero_compte','solde'];
    public function Clients ()
    {
        return $this->belongsTo('App\Clients');
    }
    
    public function Operations ()
    {
       return $this->hasMany('App\Operations');
    }
}
