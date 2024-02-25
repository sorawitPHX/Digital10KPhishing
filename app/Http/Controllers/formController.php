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
}
