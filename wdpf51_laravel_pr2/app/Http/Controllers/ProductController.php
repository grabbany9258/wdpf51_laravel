<?php

namespace App\Http\Controllers;

use App\Models\Category;
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



        $products = product::paginate(10);
        $cats = Category::orderBy('cat_name', 'ASC')->get();

        // $data['products'] = product::orderBy('id', 'DESC')->get();
        //$data['cats'] = Category::orderBy('cat_name', 'ASC')->get();
        // echo "<pre>";
        // print_r($data);

        return view('backend.products.index', compact('products', 'cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('cat_name', 'ASC')->get();
        return view('backend.products.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //echo "Hello rabbany";

        $request->validate([
            'product_name' => 'required',
            'product_details' => 'min:5|max:200',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required',
            'product_image' => 'mimes:jpeg,png,jpg,pdf,gif,svg|max:2048',

        ]);

        // if ($validation) {
        //     //product::create($request->all());
        //     //return redirect('products');
        //     echo "success";
        // } else {
        //     echo "Faild";
        // }

        //echo "hello";
        //echo $request->product_name;




        $product = new product();
        $product->product_name = $request->product_name;
        $product->product_details = $request->product_details;
        $product->product_price = $request->product_price;
        $product->product_category = $request->product_category;
        $product->product_stock = $request->product_stock;



        if ($request->product_image) {
            $imageName = time() . '.' . $request->product_image->extension();
            $request->product_image->move(public_path('product_photos'), $imageName);
            $product->product_image = $imageName;
        } else {
            $product->product_image = '';
        }

        $product->save();

        return redirect('products')->with('msg', "Product Succesfully Added");
        //echo "success";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('backend.products.show', compact('product'));
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
