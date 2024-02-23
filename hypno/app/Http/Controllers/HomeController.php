<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function wlc() {

        return view('welcome');

    }

    public function dashboard() {

        return view('home');

    }

}
