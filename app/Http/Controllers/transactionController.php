<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transactionController extends Controller
{
    public function getTrxInprogres(){
        return view("transaction.inprogress");
    }
}