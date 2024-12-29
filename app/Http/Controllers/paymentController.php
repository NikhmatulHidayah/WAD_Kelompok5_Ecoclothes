<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Midtrans\Config;
use Midtrans\Snap;

class paymentController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }
    public function getTopUpCoin(){
        return view("admin.topUpCoin");
    }

    public function postTopUpCoin(Request $request){
        $eco_id = $request->input('eco_id');
        $coin_eco = $request->input('coin_eco');

        $currentCoin = DB::table('users')
        ->where('eco_id', $eco_id)
        ->value('coin_eco');

        $newCoin = $currentCoin + $coin_eco;

        //dd($newCoin);

        DB::table('users')
        ->where('eco_id', $eco_id)
        ->update(['coin_eco' => $newCoin]);

        return redirect('/admin/merchant/add/coin');
    }

    public function postCartCheckout(Request $request, $id_user){
        $getIdCart = DB::table('carts')
        ->where('id_user', $id_user)
        ->pluck('id_cart');
        //dd($getIdCart);

        $address = $request->input('address');
        $send_type = $request->input('send_type');
        $appFee = (int) $request->input('appFee');
        $expFee = (int) $request->input('expFee');

        $total = $appFee + $expFee;
        //dd($total);


        DB::table('transactions')->insert([
            'id_transaction' => Str::uuid(),
            'id_user' => $id_user,
            'total' => $total,
            'address' => $address,
            'is_payment' => 0,
            'send_type' => $send_type,
            'status' => 'Menunggu Pembayaran',
            'resi_number' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carts')
        ->where('id_user', $id_user)
        ->update(['is_delete' => 1]);

        //dd("masuk table");
        return redirect("/payment/$id_user");
    }

    public function showSnap($id_user)
    {
    $transaction = DB::table('transactions')
        ->where('id_user', $id_user)
        ->orderBy('created_at', 'desc')
        ->first();

    if (!$transaction) {
        return redirect('/')->with('error', 'Transaksi tidak ditemukan.');
    }
    $client_key = env('MIDTRANS_CLIENT_KEY');

    $params = [
        'transaction_details' => [
            'order_id' => $transaction->id_transaction,
            'gross_amount' => $transaction->total,
        ],
        'customer_details' => [
            'first_name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'phone' => Auth::user()->phone_number,
        ],
    ];

    $snapToken = Snap::getSnapToken($params);

    // Kirim token ke view
    return view('transaction.snap', [
        'snapToken' => $snapToken,
        'transaction' => $transaction,
        'client_key' => $client_key,
    ]);
    }

    public function updateTransaction(Request $request)
    {
        $id_transaction = $request->input('id_transaction');
        $is_payment = $request->input('is_payment');
        $status = $request->input('status');

        DB::table('transactions')
            ->where('id_transaction', $id_transaction)
            ->update([
                'is_payment' => $is_payment,
                'status' => $status,
                'updated_at' => now(),
            ]);

        return response()->json(['message' => 'Transaction updated successfully']);
    }

    public function paymentVerif($id_transaction){
        return view('transaction.verification', [
            'id_transaction' => $id_transaction,
        ]);

    }
    public function postPaymentVerif($id_transaction){
        DB::table('transactions')
        ->where('id_transaction', $id_transaction)
        ->update([
            'is_payment' => 1,
            'status' => 'menunggu konfirmasi',
            'updated_at' => now(),
        ]);

        return redirect('/transaction/inprogres');


    }


}

