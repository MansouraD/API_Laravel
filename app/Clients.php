<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{

    protected $fillable = ['nom','prenom','date_de_naissance','cni','adresse','telephone','mail','profession'];

    public function Comptes ()
    {
       return $this->hasMany('App\Comptes');
    }
} 
