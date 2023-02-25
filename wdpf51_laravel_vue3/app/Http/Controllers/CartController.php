<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "Hello";
        //return Cart::all()->count();

        $id = Auth::user()->id;
        // return Cart::where('user_id', $id)->get();
        // $items =  DB::table('carts')
        //     ->join('products', 'products.id', '=', 'carts.product_id')
        //     ->where('carts.user_id', $id)
        //     ->get();

        // json data dekhte
        // return response()->json($items);

        // $items = Cart::where('user_id', $id)->get();
        // return response()->json($items);

        // With Relation ata kora hoyece Model ar maddhme.
        $items = Cart::with('product')->where('user_id', $id)->get();
        return response()->json($items);
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

        // return $request->prid;  // return korce and ata AddToCart a .then((response)=>{alert(response.data)}


        $id =  $request->prid;
        $product = Product::find($id);

        $data = [
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->price,
            'user_id' => Auth::user()->id,
            // 'user_id' => 1,
        ];

        Cart::create($data);
        return Auth::user()->id;
        //return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
