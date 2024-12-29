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

    public function getDetailProduct($id_product){
        $products = DB::table('products')
        ->where('id_product', $id_product)
        ->first();

        $id_user = Auth::id();
        $current_coin = DB::table('users')
        ->where('id_user', $id_user)
        ->value('coin_eco');

        //dd($products);
        return view('product.detail', [
            'products' => $products,
            'current_coin' => $current_coin
        ]);
    }

    public function postAddCart($id_product){
        $id_user = Auth::id();
        //dd($id_product);

        $alreadyInCart = DB::table('carts')
        ->where('id_user', $id_user)
        ->where('id_product', $id_product)
        ->exists();

        if ($alreadyInCart) {
            return back();
            //return redirect('/')->with('alert', 'Produk ini sudah ada di keranjang Anda.');
        }

        DB::table('carts')->insert([
            'id_cart' => Str::uuid(),
            'id_user' => $id_user,
            'id_product' => $id_product,
            'is_delete' => 0
        ]);

        return redirect("/checkout/$id_user");
    }

    public function getCheckout($id_user){
        $id_user = Auth::id();

        $current_coin = DB::table('users')
        ->where('id_user', $id_user)
        ->value('coin_eco');

        $carts = DB::table('carts')
        ->join('products', 'carts.id_product', '=', 'products.id_product') // Join dengan tabel products
        ->where('carts.id_user', $id_user)
        ->select(
            'carts.id_cart',
            'carts.id_product',
            'products.picture_1',
            'products.name_product',
            'products.size',
            'products.weight'
        )
        ->get()
        ->first();

        //dd($carts);
        return view('product.checkout', [
            'carts' => $carts,
            'id_user' => $id_user,
            'current_coin' => $current_coin
        ]);

    }
}
