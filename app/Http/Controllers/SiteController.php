<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Products;

class SiteController extends Controller
{
    public function index(Profile $profile)
    {

        $profiles = Profile::all();
        $currentImage = $profile->getProfileImageForIndex($profiles);
        $exclusive_products = Products::all();
        dd($exclusive_products);
        return view('content', ['profiles' => $profiles, 'profile_Image' => $currentImage , 'exclusive_products' => $exclusive_products]);
        
    }
}
