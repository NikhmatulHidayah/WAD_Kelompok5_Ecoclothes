<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class merchantController extends Controller
{
    public function getAllOrder(){
        return view("admin.order");
    }
}
