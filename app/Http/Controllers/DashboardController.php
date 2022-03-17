<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this -> middleware(['auth']); //or can put ->middleware('auth') in web.php aka routes file
        //only when logged in
    }
    public function index()
    {
       
        return view('dashboard');
    }
}
