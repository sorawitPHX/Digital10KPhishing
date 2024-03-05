<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkstatusController extends Controller
{
    public function checkForm(){
        return view('check_status_form');
    }
}
