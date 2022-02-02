<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $allCategories = Category::where('parent_id',0)->with('subCategories')->get();
        //var_dump($r);
        return response()->json([
            'message'=>'ok',
            'data'=>$allCategories
        ],200);
    }
    

    


    public function GetCategories() {
        $mainCategories = Category::where('parent_id',null)->with('subCategories')->get();
        //var_dump($r);
        return response()->json([
            'message'=>'ok',
            'data'=>$mainCategories
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
        
        $Category = Category::create([
            'name' =>$request->name,
            'slug' =>$request->slug,
            'description'=>$request->description,
            'parent_id'=>$request->parent_id
        ]);

        return response()->json([
            'message'=>'ok',
            'data'=>$Category
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
        //
        $BrowseCategory = Category::where('parent_id',$id)->with('subCategories')->with('products')->get();
        return response()->json([
            'message'=>'ok',
            'data'=>$BrowseCategory
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
