<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Victim;

class checkstatusController extends Controller
{
    public function checkForm(){
        return view('check_status_form');
    }

    public function checkStatus(Request $request){
        $victim = Victim::where("identification_number", $request->in_personal_id)->get();
        return view('check_status_form', compact('victim'));
    }
}
