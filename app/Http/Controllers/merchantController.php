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
    
    public function getAllOrder()
    {
        // Ambil data dari tabel transactions, users, carts, dan products
        $transactions = DB::table('transactions')
            ->join('users', 'transactions.id_user', '=', 'users.id_user') // Join dengan tabel users
            ->join('carts', 'transactions.id_user', '=', 'carts.id_user') // Join dengan tabel carts
            ->join('products', 'carts.id_product', '=', 'products.id_product') // Join dengan tabel products
            ->where('transactions.is_payment', true)
            ->where('carts.is_delete', 1)
            ->select(
                'transactions.id_transaction',
                'transactions.total',
                'transactions.address',
                'transactions.status',
                'transactions.send_type', 
                'transactions.resi_number',
                'transactions.created_at',
                'users.name as user_name', 
                'products.name_product as product_name', 
                'transactions.id_user' 
            )
            ->orderBy('transactions.created_at', 'desc')
            ->get();
    
        $groupedTransactions = $transactions->groupBy('id_user');
    
        return view("admin.order", [
            'groupedTransactions' => $groupedTransactions
        ]);
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
        $articles = DB::table(table: 'articles')
        ->where('is_delete', 0)
        ->get();

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
    public function getListEvent(){
        $events = DB::table(table: 'events')
        ->where('is_delete', 0)
        ->get();

        return view('admin.event', [
            'events' => $events,
        ]);
    }

    public function getAddEvent(){
        return view("admin.AddEvent");
    }
    public function postAddEvent(Request $request)
    {
        $name_event = $request->input('name_event');
        $quota = $request->input('quota');
        $picture = $request->input('picture');
        $description = $request->input('description');
        $type = $request->input('type');
        $date = $request->input('date');
        $clock = $request->input('clock');
    
        DB::table('events')->insert([
            'name_event' => $name_event,
            'quota' => $quota,
            'picture' => $picture,
            'description' => $description,
            'date' => $date,
            'clock' => $clock,
            'is_delete' => 0,
            'type' => $type,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return redirect("/admin/merchant/event");
    }

    public function getEditEvent($id_event){
        $events = DB::table('events')
        ->where('id_event', $id_event)
        ->first();

        $participants = DB::table('participant_events')
        ->join('users', 'participant_events.id_user', '=', 'users.id_user')
        ->where('participant_events.id_event', $id_event)
        ->select('users.name', 'users.phone_number', 'users.eco_id')
        ->get();

        //dd($participants);

        //dd($events);
        return view('admin.editEvent', [
            'id_event' => $id_event,
            'events' => $events,
            'participants' => $participants
        ]);
    }

    public function postEditEvent(Request $request, $id_event){
        $name_event = $request->input('name_event');
        $quota = $request->input('quota');
        $picture = $request->input('picture');
        $description = $request->input('description');
        $type = $request->input('type');

        DB::table('events')
        ->where('id_event', $id_event)
        ->update([
            'name_event' => $name_event,
            'quota' => $quota,
            'picture' => $picture,
            'description' => $description,
            'type' => $type,
            'updated_at' => now(),
        ]);

        return redirect("/admin/merchant/event");
    }

    public function deleteEvent($id_event)
    {
        $updated = DB::table('events')
            ->where('id_event', $id_event)
            ->update(['is_delete' => 1]);
    
        if ($updated) {
            return redirect("/admin/merchant/event");
        } else {
            return redirect("/admin/merchant/event");
        }
    }

    public function getEditArticle($id_article){
        $articles = DB::table('articles')
        ->where('id_article', $id_article)
        ->first();

        //dd($articles);
        return view('admin.editArticle', [
            'articles' => $articles,
            'id_article' => $id_article
        ]);
    }

    public function postEditArticle(Request $request, $id_article){
        $title = $request->input('title');
        $author = $request->input('author');
        $picture = $request->input('picture');
        $content = $request->input('content');

        DB::table('articles')
        ->where('id_article', $id_article)
        ->update([
            'title' => $title,
            'author' => $author,
            'picture' => $picture,
            'content' => $content,
        ]);

        return redirect("/admin/merchant/article");

    }

    public function deleteArticle($id_article){
        $updated = DB::table('events')
        ->where('id_article', $id_article)
        ->update(['is_delete' => 1]);

        if ($updated) {
            return redirect("/admin/merchant/article");
        } else {
            return redirect("/admin/merchant/article");
        }
    }

    public function getEditMerchant(Request $request, $id_merchant){
        $merchants = DB::table('merchants')
        ->where('id_merchant', $id_merchant)
        ->first();

        //dd($merchants);
        return view('admin.editMerchant', [
            'merchants' => $merchants
        ]);
    }

    public function postEditMerchant(Request $request, $id_merchant)
    {
    $data = [
        'name_merchant' => $request->input('name_merchant'),
        'address' => $request->input('address'),
        'work_hours' => $request->input('work_hours'),
        'status' => $request->input('status'),
        'picture_1' => $request->input('picture_1'),
        'picture_2' => $request->input('picture_2'),
        'picture_3' => $request->input('picture_3'),
        'picture_4' => $request->input('picture_4'),
        'picture_5' => $request->input('picture_5'),
        'maps_location' => $request->input('maps_location'),
        'updated_at' => now(),
    ];

    DB::table('merchants')
        ->where('id_merchant', $id_merchant)
        ->update($data);

    return redirect('/admin/merchant/setting')->with('success', 'Data merchant berhasil diperbarui.');
    }

    

}
