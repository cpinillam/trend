<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
    $products=Products::all();
    return view('home',['products' => $products]);
  
  }


  public function productsById($user_id)
  {
    
  $products = new Products;
  $productsById = $products->getProductsById($user_id);
  dd($productsById);
  return view('home',['products' => $products]);

}

}
