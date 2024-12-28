<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class merchantController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/merchant/login');
    }
    public function getAllOrder(){
        //$id_user = Auth::user()->id_user;
        //dd($id_user);
        return view("admin.order");
    }
    public function getLogin(){
        return view("admin.login");
    }
    public function getMerchantDashboard(){
        return view(view: "admin.merchant");
    }
    public function getAddMerchant(){
        $id_user = Auth::user()->id_user;
        //dd($id_user);
        return view('admin.openBranch', ['id_user' => $id_user]);
    }

    public function postAddMerchant(Request $request)
    {
        $id_user = $request->input('id_user');
        $name_merchant = $request->input('name_merchant');
        $address = $request->input('address');
        $work_hours = $request->input('work_hours');
        $status = $request->input('status', 'tutup');
        $maps_location = $request->input('maps_location');

        DB::table('merchants')->insert([
            'id_merchant' => Str::uuid(),
            'id_user' => $id_user,
            'name_merchant' => $name_merchant,
            'address' => $address,
            'work_hours' => $work_hours,
            'status' => $status,
            'maps_location' => $maps_location,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect("/admin/merchant/setting");
    }

}
