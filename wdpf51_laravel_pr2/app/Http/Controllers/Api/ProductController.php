<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =  Product::orderBy('created_at', 'desc')->take(10)->get();
        return $products;

        // return Product::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $request->validate([
            'product_name' => 'required',
            'product_details' => 'min:5|max:200',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required',
            // 'product_image' => 'mimes:jpeg,png,jpg,pdf,gif,svg|max:2048',

        ]);
        Product::create($input);
        return "Inserted Successfully";
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
        $product = Product::findOrFail($id);

        $input = $request->all();
        $product->update($input);
        Product::findOrFail($id);
        return "Success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete($id);
        return response()->json(['msg' => 'Successfully Deleted']);
    }
}
