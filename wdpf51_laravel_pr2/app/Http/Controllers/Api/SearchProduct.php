<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProduct extends Controller
{
    public function search(Request $req)
    {
        // return $req->all();
        $term = $req->item;
        $result =  DB::table('products')->where('product_name', 'LIKE', "%$term%")->get();
        return $result;
    }
}
