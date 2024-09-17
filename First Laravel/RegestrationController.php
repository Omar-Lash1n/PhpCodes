<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegestrationController extends Controller
{
    public function Register(){
        return view('RegisterForm');
    }
}
