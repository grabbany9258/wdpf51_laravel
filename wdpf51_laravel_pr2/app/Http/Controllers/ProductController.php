<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\product;
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


        $data['cats'] = Catagory::orderBy('cat_name', 'ASC')->get();
        $data['products'] = product::orderBy('id', 'DESC')->get();
        // echo "<pre>";
        // print_r($data);
        return view('backend.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     // 
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "hello";
        //echo $request->product_name;

        // $product = new product();
        // $data['product_name'] = $request->product_name;
        // $data['product_details'] = $request->product_details;
        // $data['product_price'] = $request->product_price;
        // $data['product_category'] = $request->product_category;
        // $data['product_stock'] = $request->product_stock;
        // $data['product_image'] = $request->product_image;

        // $product->insert($data);

        // Avabeo nibe

        $product = new product();
        $product->product_name = $request->product_name;
        $product->product_details = $request->product_details;
        $product->product_price = $request->product_price;
        $product->product_category = $request->product_category;
        $product->product_stock = $request->product_stock;
        $product->product_image = $request->product_image;

        $product->save();

        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
