<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Business;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->query('keyword'); // will give what the user searched
        $area = $request->query('area'); // will give what the user searched


        if ($keyword != null && $area != null) {
            $businesses = DB::table('business')
                ->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('description', 'like', '%' . $keyword . '%')
                ->orWhere('address', 'like', '%' . $area . '%')
                ->orWhere('prefecture', 'like', '%' . $area . '%')
                ->get();
            return view('search.index', ['businesses' => $businesses, 'keyword' => $keyword,  'area' => $area]);
        } else if ($keyword == null && $area == null) {
            $businesses = Business::all();
            return view('search.index', ['businesses' => $businesses, 'input' => '']);
        } else if ($keyword != null && $area == null) {
            $businesses = DB::table('business')
                ->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('description', 'like', '%' . $keyword . '%')
                ->get();
            return view('search.index', ['businesses' => $businesses, 'keyword' => $keyword]);
        } else if ($keyword == null && $area != null) {
            $businesses = DB::table('business')
                ->where('address', 'like', '%' . $area . '%')
                ->orWhere('prefecture', 'like', '%' . $area . '%')
                ->get();
            return view('search.index', ['businesses' => $businesses, 'area' => $area]);
        } else if (sizeof($businesses) == 0) {
            return Redirect::back('search.index');
        } else {
            return view('search.index', ['businesses' => $businesses, 'keyword' => $keyword,  'area' => $area]);
        }
    }
}
