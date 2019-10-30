<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
         'facebook',
         'instagram',
         'youtube',
         'twitch'
    
            
    ];

   public function upDateProfileImage($data)
   {
  
       
        if($data->hasFile('profile_image'))
        {
            $file=$data->file('profile_image');
            $extension=$data->file('profile_image')->getClientOriginalExtension();
            $file_name=$this->user_id.'.'.$extension;
            $file->storeAs("$this->user_id/profile_images",$file_name);    
            
            return "Image Uploaded";
            
        }

    }

    public function getProfileImage($user_id)
    {
        
        $path="$user_id/profile_images/";
        $result=Storage::files($path);
        // $test=storage_path($path);
        //dd(empty($result));

        if(empty($result)){
            return "storage/default/default.jpg";
        }
        return "storage/".$result[0];

    }
}
