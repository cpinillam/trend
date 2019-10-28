<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use App\Products;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles=Profile::all();
        return view('content',['profiles' => $profiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        
        /* --------------- To Do Ask diference Between create and store ---------- */
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        $profileDetails = $profile;
        return view('profileDetail',['profileDetails' => $profileDetails]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
       
        return view('editProfile',['profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        dd($request);
        $profile->update($request->all());
        $this->validate($request, ['profile_image'=>'required|image']);

        // $user=$profile->user_id;
        $extension=$request->file('profile_image')->getUserOriginalExtension();
        $file_name=$profile->user_id.'.'.$extension;

        Image::make($request->file('profile_image'))
        ->resize(144,144)
        ->save('profiles/'.$profile->user_id.'/portrait_img/'.$file_name);

        $profile->profile_image=$extension;
        $profile->save();

        return redirect("profile/$profile->user_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    // To Do ask 
    public function getProductsByUser($user)
    {
        $products=Products::all();
        return view("profile/$user",['products' => $products]);
    }
}
