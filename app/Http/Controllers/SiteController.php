<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\User;
use App\Products;

class SiteController extends Controller
{
    public function index(Profile $profile, Products $products)
    {
 
        $profiles = Profile::all()->take(6);
        $currentImage = $profile->getProfileImageForIndex($profiles);
        $exclusive_products = $products->getFeaturedProducts();
        return view('content', ['profiles' => $profiles, 'profile_Image' => $currentImage , 'exclusive_products' => $exclusive_products]);
        
    }
}
