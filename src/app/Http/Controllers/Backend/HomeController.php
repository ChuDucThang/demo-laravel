<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Views;

class HomeController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }
    public function index(){
        return view('backend.home.main');
    }
}
