<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    protected $fillable = ['montant'];
 

    public function Comptes()
    {
        return $this->belongsTo('App\Comptes');
    }
}
