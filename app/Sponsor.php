<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    //Relazione molti a molti ( * sponsor * appartamento) 
    public function apartments(){
        return $this->belongsToMany('App\Apartment')->withPivot('start-date', 'end-date');
    }
}
