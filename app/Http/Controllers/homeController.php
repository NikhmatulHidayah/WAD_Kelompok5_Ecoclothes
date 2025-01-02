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
        $id_user = Auth::user()->id_user;
        $articles = DB::table(table: 'articles')->get();

        $reservations = DB::table('reservations')
        ->where('id_user', $id_user)
        ->where('is_arrive', 0)
        ->first();

        //dd($reservations);

        return view("home.home", [
            'user' => $user,
            'articles' => $articles,
            'reservations' => $reservations
        ]);
    }
}
