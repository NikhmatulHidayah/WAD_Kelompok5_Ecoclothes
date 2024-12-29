<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class transactionController extends Controller
{
    public function getAllTrx()
    {
        $id_user = Auth::id();
    
        // Ambil data dari tabel carts dengan join ke products dan transactions
        $carts = DB::table('carts')
            ->join('products', 'carts.id_product', '=', 'products.id_product') // Join dengan tabel products
            ->join('transactions', 'carts.id_user', '=', 'transactions.id_user') // Join dengan tabel transactions
            ->where('carts.id_user', $id_user)
            ->where('carts.is_delete', 1)
            ->select(
                'carts.id_cart',
                'products.name_product',
                'products.size',
                'products.weight',
                'transactions.id_transaction',
                'transactions.total',
                'transactions.created_at as transaction_date'
            )
            ->get();
    
        $groupedTransactions = $carts->groupBy('id_transaction');
    
        //dd($groupedTransactions);
    
        return view('transaction.all', [
            'groupedTransactions' => $groupedTransactions,
        ]);
    }

    
    
}
