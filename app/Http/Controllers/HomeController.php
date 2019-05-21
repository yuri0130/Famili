<?php

namespace App\Http\Controllers;

use App\Business; //this is how you include another model
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $businesses = Business::all()->take(3); // ->take(n) tells laravel to only take n records
        return view('home', ['businesses' => $businesses]);
    }
}
