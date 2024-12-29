<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class transactionController extends Controller
{
    public function getAllTrx(){
        $id_user = Auth::id();
        $transactions = DB::table('transactions')
        ->join('users', 'transactions.id_user', '=', 'users.id_user') // Join dengan tabel users
        ->join('carts', 'transactions.id_user', '=', 'carts.id_user') // Join dengan tabel carts
        ->join('products', 'carts.id_product', '=', 'products.id_product') // Join dengan tabel products
        ->where('transactions.id_user', $id_user) 
        ->select(
            'transactions.id_transaction',
            'transactions.total',
            'transactions.created_at',
            'products.name_product'
        )
        ->get();
        $uniqueTransactions = $transactions->groupBy('id_transaction')->map(function ($group) {
            return $group->first();
        });

        dd($uniqueTransactions);
        return view('transaction.all', [
            'transactions' => $transactions,
        ]);
    }
}
