<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntuation extends Model
{
    public function Products(){
        return $this->belongsTo('App\Products');
    }
}
  