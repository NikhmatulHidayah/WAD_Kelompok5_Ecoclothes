<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class productController extends Controller
{
    public function getAllMerchant(){
        $merchants = DB::table('merchants')->get();
        return view('merchant.search', ['merchants' => $merchants]);
    }
    public function getDetailMerchant($id_merchant){
        $merchant = DB::table('merchants')
        ->where('id_merchant', $id_merchant)
        ->first();

        $products = DB::table('products')
        ->where('id_merchant', $id_merchant)
        ->get();

        //dd($products);

        return view('merchant.detail', [
            'id_merchant' => $id_merchant,
            'merchant' => $merchant,
            'products' => $products
        ]);
    }

    public function getDetailProduct(){
        return view("product.detail");
    }
}
