<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function User(){

        return $this->hasOne('App\User');
    }
    protected $fillable = [
        'user_id','name','description'
    ];
}
