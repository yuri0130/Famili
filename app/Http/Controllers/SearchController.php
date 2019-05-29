<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Business;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //obtain keywords
        // $keyword = $request->input('keyword');

        //if input keyword
        // if (!empty($keyword)) {
        //     //search by businessname
        //     $businesses = DB::table('businesses')
        //         ->where('name', 'like', '%' . $keyword . '%')
        //         ->paginate(5);

        //     //search by prefecture
        //     $businesses = Business::whereHas('prefecture', function ($query) use ($keyword) {
        //         $query->where('prefecture', 'like', '%' . $keyword . '%');
        //     })->paginate(5);
        // } else { //no input keyword
        //     $businesses = DB::table('businesses')->paginate(5);
        //     return view('business.index', [
        //         'businesses' => $businesses, //'API_KEY' => $API_KEY
        //     ]);
        // }



        // dd($request);
        $input = $request->query('search'); // will give what the user searched
        if ($input == null) {
            $businesses = Business::all();
            return view('search.index', ['businesses' => $businesses, 'input' => '']);
        } else {
            $businesses = DB::table('business')
                ->where('name', 'like', '%' . $input . '%')
                ->orWhere('description', 'like', '%' . $input . '%')
                ->get();
            if (sizeof($businesses) == 0) {
                return view('search.index', ['businesses' => $businesses, 'input' => 'Sorry could not find any businsesses with the name: ' . $input]);
            } else {
                return view('search.index', ['businesses' => $businesses, 'input' => $input]);
            }
        }
    }
}
