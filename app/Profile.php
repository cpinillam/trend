<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
       return $this->hasOne('App\User');
    }
    protected $fillable = [
        
        'name','user_id',
        // 'email', 'last_name','bio','address','post_code','facebook','instagram','youtube','twitch'
    
            
    ];

   


}
