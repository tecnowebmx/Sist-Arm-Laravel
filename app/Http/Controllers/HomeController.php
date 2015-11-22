<?php

namespace ARM\Http\Controllers;

use Illuminate\Http\Request;
use ARM\Http\Requests;
use ARM\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
