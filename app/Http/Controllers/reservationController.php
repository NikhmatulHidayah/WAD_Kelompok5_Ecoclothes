<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class reservationController extends Controller
{
    public function getReservation(){
        //$id_user = Auth::user()->id_user;
        return view("reservation.create");
    }
    public function getEditReservation(){
        $id_user = Auth::user()->id_user;
        $reservations = DB::table('reservations')
        ->where('id_user', $id_user)
        ->first();

        //dd($reservations->date);
        return view("reservation.edit", [
            'id_user' => $id_user,
            'reservations' => $reservations
        ]);
    }

    public function postEditReservation(Request $request){
        $id_user = Auth::user()->id_user;
        $date = $request->input('date');
        $convertedDate = date('d-m-Y', strtotime($date));

        $updated = DB::table('reservations')
        ->where('id_user', $id_user)
        ->update([
            'date' => $convertedDate,
            'clock' => $request->input('clock'),
        ]);

        if ($updated) {
            return redirect('/')->with('success', 'Reservasi berhasil diperbarui!');
        } else {
            return redirect('/')->with('alert', 'Reservasi tidak ditemukan atau gagal diperbarui.');
        }
    }

    public function postReservation(Request $request){
        $id_user = Auth::user()->id_user;

        $date = $request->input('date');
        $convertedDate = date('d-m-Y', strtotime($date));

        $clock = $request->input('clock');
        //$currentTime = date('H:i');
        //$newTime = date('H:i', strtotime('+7 hours', strtotime($currentTime)));

        $alreadyRes = DB::table('reservations')
        ->where('id_user', $id_user)
        ->where('is_arrive', false)
        ->exists();

        if ($alreadyRes) {
            //return back();
            return redirect('/reservation/edit')->with('alert', 'Kamu sudah melakukan reservasi, edit untuk mengubah jadwal reservasi kamu');
        }

        DB::table('reservations')->insert([
            'id_reservation' => Str::uuid(),
            'id_user' => $id_user,
            'date' => $convertedDate,
            'clock' => $clock,
            'is_arrive' => 0,
        ]);

        return redirect("/")->with('success', 'Reservasi kamu berhasil dibuat');

    }

    public function getReservationAdmin(){
        $reservations = DB::table('reservations')
            ->join('users', 'reservations.id_user', '=', 'users.id_user')
            ->where('reservations.is_arrive', false)
            ->select('reservations.*', 'users.name')
            ->get();
    
       //dd($reservations);
       return view("admin.reservation", [
        'reservations' => $reservations
        ]);
    }

    public function postReservationAdmin($id_reservation){
        $updated = DB::table('reservations')
        ->where('id_reservation', $id_reservation)
        ->update([
            'is_arrive' => 1,
        ]);

        if ($updated) {
            return redirect('/admin/merchant/reservation')->with('success', 'Reservasi telah dikonfirmasi');
        } else {
            return redirect('/admin/merchant/reservation')->with('alert', 'Reservasi tidak ditemukan atau gagal diperbarui.');
        }
    }
}
