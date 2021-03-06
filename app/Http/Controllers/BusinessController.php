<?php

namespace App\Http\Controllers;

use App\Business;
use App\User;
use App\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


// php artisan make:controller BusinessController --resource
// https://laravel.com/docs/5.8/controllers#defining-controllers

class BusinessController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $API_KEY = env('GOOGLE_API_KEY');

        $businesses = Business::all();
        return view('business.index', ['businesses' => $businesses, 'API_KEY' => $API_KEY]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('edit_business')) {
            return view('business.create');
        } else {
            return redirect('/');
        }
    }



    /**m 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business = new Business();
        $business->name = $request->name;
        $business->prefecture = $request->prefecture;
        $business->address = $request->address;
        $business->contact = $request->contact;
        $business->description = $request->description;
        $business->url = $request->url;
        $business->image = $request->file('image')->store('public/images');

        $business->save();

        return redirect('/businesses/' . $business->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show($business_id)
    {

        $users = User::all();
        $business = Business::findOrFail($business_id);
        $url = Storage::url($business->image);
        $reviews = DB::table('review')
            ->where('business_id', "=", $business_id)
            ->get();

        return view(
            'business.show',
            compact('business', 'reviews',  'url', 'users')
        );
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit($business)
    {


        if (Gate::allows('edit_business')) {
            $business = Business::findOrFail($business);
            return view('business.edit', compact('business'));
        } else {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {

        $business->name = $request->name;
        $business->prefecture = $request->prefecture;
        $business->address = $request->address;
        $business->contact = $request->contact;
        $business->description = $request->description;
        $business->url = $request->url;
        $business->image = $request->file('image')->store('public/images');

        $business->save();

        return redirect('/businesses/' . $business->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */


    public function destroy(Business $business)
    {
        //
    }
}
