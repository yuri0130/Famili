<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Business;

class SearchController extends Controller
{
    public function index(Request $request)
    {


        //Search based on "keyword" 
        // $input = $request->query('keyword'); // will give what the user searched
        // if ($input == null) {
        //     $businesses = Business::all();
        //     return view('search.index', ['businesses' => $businesses, 'input' => ' ']);
        // } else {
        //     $businesses = DB::table('business')
        //         ->where('name', 'like', '%' . $input . '%')
        //         ->orWhere('description', 'like', '%' . $input . '%')
        //         ->get();
        //     if (sizeof($businesses) == 0) {
        //         return view('search.index', ['businesses' => $businesses, 'input' => 'Sorry could not find any businsesses with the keyword : ' . $input]);
        //     } else {
        //         return view('search.index', ['businesses' => $businesses, 'input' => $input]);
        //     }
        // }

        //Search based on "area" 
        $input = $request->query('area'); // will give what the user searched
        if ($input == null) {
            $businesses = Business::all();
            return view('search.index', ['businesses' => $businesses, 'input' => '']);
        } else {
            $businesses = DB::table('business')
                ->where('address', 'like', '%' . $input . '%')
                ->orWhere('prefecture', 'like', '%' . $input . '%')
                ->get();
            if (sizeof($businesses) == 0) {
                return view('search.index', ['businesses' => $businesses, 'input' => 'Sorry could not find any businsesses with the area : ' . $input]);
            } else {
                return view('search.index', ['businesses' => $businesses, 'input' => $input]);
            }
        }
    }
}
