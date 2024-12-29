<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class homeController extends Controller
{
    public function getHome(){
        $user = Auth::user();
        $articles = DB::table(table: 'articles')->get();

        return view("home.home", [
            'user' => $user,
            'articles' => $articles
        ]);
    }
}
