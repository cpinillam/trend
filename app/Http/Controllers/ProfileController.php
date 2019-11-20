<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use App\Products;
use App\Order;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Profile $profile)
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
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
    public function show(Profile $profile, Order $order)
    {

        $currentImage = $profile->getProfileImage();
        $products = $profile->user->products;
        $orders = $profile->user->orders;
//dd(count($orders));

     

        return view('profileDetail', ['profileDetails' => $profile, 'profile_Image' => $currentImage, 'userProducts' => $products, 'myorders' => $orders]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
            if($this->authorize('edit',$profile)){
                return view('editProfile', ['profile' => $profile]);
            }
            return view('content');


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

        $profile->upDateProfileImage($request);

        $profile->update($request->all());

        return redirect("profile/$profile->id");
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


    public function getName($id){

    }


}
