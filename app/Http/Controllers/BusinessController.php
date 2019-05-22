<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;


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
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business = new Business;
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
        $business = Business::findOrFail($business_id);
        return view('business.show',  [
            'business' => $business,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        //
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
        //
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
