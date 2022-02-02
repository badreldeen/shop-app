<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::with('company')->get();
        //
        return response()->json([
            'message'=>'ok',
            'data'=>$products
        ],200);
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
        $Product = Product::create([
            'product_name' =>$request->product_name,
            'slug' =>$request->slug,
            'description'=>$request->description,
            'category_id' =>$request->category_id,
            'company_id' =>$request->company_id,
            'price'=>$request->price,
            'image'=>$request->image,
           
        ]);



        


        return response()->json([
            'message'=>'ok',
            'data'=>$Product
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $BrowseProduct = Product::where('id',$id)->with('company')->with('category')->get();
        return response()->json([
            'message'=>'ok',
            'data'=>$BrowseProduct
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
