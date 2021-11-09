<?php


namespace App\Http\Controllers;

class HomeController extends Controller
{


    // home page view
    public function index()
    {
        return view('home');
    }
}