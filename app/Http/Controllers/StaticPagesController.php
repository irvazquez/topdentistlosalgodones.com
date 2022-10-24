<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function whatIsLosAlgodones() {
        return view('what-is-los-algodones');
    }
}
