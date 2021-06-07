<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return all products 
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $data = request()->validate([
            'title' => 'required',
            'slug'=>'',
            'description' => '',
            'image'=>'',
            'images'=>'',
            'options'=>'',
            'avgRating'=>'',
            'ratings'=>'',
            'price'=>'',
            'oldPrice' =>''
        ]);


        //save data in db
        return Product::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return single product with id

        return Product::find($id);
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

        //find product to update
        $product = Product::find($id);

         //validate data
         $data = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'description' =>''
        ]);

        //update product 
        $product->update($data);
        $product->save();
        

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destroy the product with said id

        Product::destroy($id);

        return 'done';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($title)
    {

        //returns product object where the name is similar to name input
        return Product::where('title' , 'like' , '%'.$title.'%')->get(); //like means similar, % means wildcard concatnation
       
    }
}


    


