<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
       return $this->hasOne('App\User');
    }

    
    protected $fillable =
     
    [
        
         'username',
         'user_id',
         'first_name',
         'email',
         'last_name',
         'bio',
         'address',
         'post_code',
         'profile_image',
         'facebook',
         'instagram',
         'youtube',
         'twitch'
    
            
    ];

   


}
