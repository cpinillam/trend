<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_status extends Model
{
    //
    public function order()
    {
        return $this->hasOne('App\Order', 'id_status');
    }
}
