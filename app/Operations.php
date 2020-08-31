<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    public function Comptes()
    {
        return $this->belongsTo('App\Comptes');
    }
}
