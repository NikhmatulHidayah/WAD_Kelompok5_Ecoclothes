<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function getAllMerchant(){
        return view("merchant.search");
    }
    public function getDetailMerchant(){
        return view("merchant.detail");
    }
}
