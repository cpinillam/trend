<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $data = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'initial_price' => 'required',
            'description' => 'required'
            
        ]);

        
        $product = new Products();
        $product->user_id = $request->user_id;
        $product->name = $request->name;
        $product->initial_price = $request->initial_price;
        $product->description = $request->description;

        $product->save();
        return redirect("profile/$product->user_id");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        //TO DO Middelware
        Products::where('id', $product->id)->update(['points' => ($product->points)+1]);
        return view('productDetail', ['productDetails' => $product]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        if($this->authorize('edit',$product)){
            return view('products/products-edit-form', ['product' => $product]);
        }
        return view('content');


        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {

        $product->upDateProductImages($request);
        
        $product->update($request->all());
        return redirect("product/$product->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
