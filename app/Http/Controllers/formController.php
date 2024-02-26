<?php

namespace App\Http\Controllers;

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
}
