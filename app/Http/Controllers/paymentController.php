<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class paymentController extends Controller
{
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
}
