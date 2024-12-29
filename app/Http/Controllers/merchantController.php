<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class merchantController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/merchant/login');
    }
    public function getAllOrder(){
        //$id_user = Auth::user()->id_user;
        //dd($id_user);
        return view("admin.order");
    }
    public function getLogin(){
        return view("admin.login");
    }
    public function getMerchantDashboard(){
        $merchants = DB::table('merchants')->get();
        //dd($merchants);
        return view('admin.merchant', ['merchants' => $merchants]);
    }
    public function getAddMerchant(){
        $id_user = Auth::user()->id_user;
        //dd($id_user);
        return view('admin.openBranch', ['id_user' => $id_user]);
    }

    public function postAddMerchant(Request $request)
    {
        $id_user = $request->input('id_user');
        $name_merchant = $request->input('name_merchant');
        $address = $request->input('address');
        $work_hours = $request->input('work_hours');
        $status = $request->input('status', 'tutup');
        $maps_location = $request->input('maps_location');

        DB::table('merchants')->insert([
            'id_merchant' => Str::uuid(),
            'id_user' => $id_user,
            'name_merchant' => $name_merchant,
            'address' => $address,
            'work_hours' => $work_hours,
            'status' => $status,
            'maps_location' => $maps_location,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect("/admin/merchant/setting");
    }

    public function getProductList($id_merchant)
    {
        $merchant = DB::table('merchants')
            ->where('id_merchant', $id_merchant)
            ->select('name_merchant')
            ->first();

        $products = DB::table('products')
        ->where('id_merchant', $id_merchant)
        ->get();
    
        return view('admin.productList', [
            'id_merchant' => $id_merchant,
            'name_merchant' => $merchant->name_merchant ?? 'Merchant not found',
            'products' => $products
        ]);
    }

    public function getAddProduct($id_merchant){
        $merchant = DB::table('merchants')
        ->where('id_merchant', $id_merchant)
        ->select('name_merchant')
        ->first();

        return view('admin.addProduct', [
            'id_merchant' => $id_merchant,
            'name_merchant' => $merchant->name_merchant ?? 'Merchant not found'
        ]);
    }

    public function postAddProduct(Request $request, $id_merchant){
        $id_merchant = $request->input('id_merchant');
        $name_product = $request->input('name_product');
        $size = $request->input('size');
        $weight = $request->input('weight');
        $category = $request->input('category');
        $picture_1 = $request->input('picture_1');
        $picture_2 = $request->input('picture_2');
        $picture_3 = $request->input('picture_3');
        $picture_4 = $request->input('picture_4');
        $picture_5 = $request->input('picture_5');

        DB::table('products')->insert([
            'id_product' => Str::uuid(),
            'id_merchant' => $id_merchant,
            'name_product' => $name_product,
            'size' => $size,
            'weight' => $weight,
            'category' => $category,
            'picture_1' => $picture_1,
            'picture_2' => $picture_2,
            'picture_3' => $picture_3,
            'picture_4' => $picture_4,
            'picture_5' => $picture_5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect("/admin/merchant/product/all/$id_merchant");
    }

    public function getListarticle(){
        $articles = DB::table(table: 'articles')->get();

        return view('admin.article', [
            'articles' => $articles,
        ]);
    }
    public function getAddArticle(Request $request){
        return view("admin.addArticle");
    }
    public function postAddArticle(Request $request){
        $title = $request->input('title');
        $author = $request->input('author');
        $picture = $request->input('picture');
        $content = $request->input('content');

        DB::table('articles')->insert([
            'title' => $title,
            'author' => $author,
            'picture' => $picture,
            'content' => $content,
        ]);

        return redirect("/admin/merchant/article");

    }

}
