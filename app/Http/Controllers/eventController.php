<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class eventController extends Controller
{
    public function getEvent(){
        $events = DB::table('events')
            ->where('is_delete', 0)
            ->get();
            
        return view('event.event', [
            'events' => $events,
        ]);
    }
    public function getRegistEvent($id_event){
        $id_user = Auth::id();
        $users = DB::table('users')
        ->where('id_user', $id_user)
        ->first();

        $events = DB::table('events')
        ->where('id_event', $id_event)
        ->first();

        //dd($events);
        return view('event.register', [
            'events' => $events,
            'users' => $users
        ]);
    }
    public function postRegistEvent($id_event){
        $id_user = Auth::id();
        // $users = DB::table('users')
        // ->where('id_user', $id_user)
        // ->first();
        //dd($id_user);

        $alreadyRegistered = DB::table('participant_events')
        ->where('id_user', $id_user)
        ->where('id_event', $id_event)
        ->exists();

        if ($alreadyRegistered) {
            return back()->with('alert', 'Anda sudah terdaftar di event ini!');
        }

        DB::table('participant_events')->insert([
            'id_user' => $id_user,
            'id_event' => $id_event
        ]);

        DB::table('events')
        ->where('id_event', $id_event)
        ->decrement('quota', 1);

        return redirect("/")->with('success', 'Pendaftaran berhasil, undangan akan dikirimkan oleh tim EcoClothes');
    }
}
