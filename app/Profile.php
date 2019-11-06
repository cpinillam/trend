<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    public function user()
    {
       return $this->belongsTo('App\User');
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
  
       
        if($data->hasFile('file'))
        {
            $file=$data->file('file');
            $extension=$file->getClientOriginalExtension();
            $file_name=$this->user_id.'.'.$extension;
            $file->storeAs("users/$this->user_id/profile_images",$file_name);  
              
            
            return "Image Uploaded";
            
        }

    }

    public function getProfileImage()
    {        
        $path="users/$this->user_id/profile_images/";
        $result=Storage::files($path);
        if(empty($result)){
            return "storage/default/default.svg";
        }
        return "storage/".$result[0];
    }

    public function getProfileImageForIndex($profiles)
    {
        $indexProfilesImages = array();
        foreach ($profiles as $index => $profile) {
            $path="users/$profile->user_id/profile_images/"; 
            $result=Storage::files($path);
            if(empty($result)){
                array_push($indexProfilesImages, 'storage/default/default.svg');
            }
            if(!empty($result)){
                array_push($indexProfilesImages, 'storage/'.$result[0]);
            } 
        } 
        return $indexProfilesImages; 
    }
}
