<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;
use Illuminate\Support\Facades\Auth;
use App\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //コンストラクタ
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $reviews = Review::all();
        return view(
            'business.show',
            compact('business')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($business_id)
    {

        $business = Business::findOrFail($business_id);

        return view('review.create', compact('business'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $business_id)
    {
        $review = new Review;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->business_id = $request->business_id;
        $review->user_id = $request->user_id;
        $user = Auth::user();

        $review->save();
        return redirect('/businesses/' . $business_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($business_id)
    {
        $business = Business::findOrFail($business_id);
        return view(
            'business.show',
            compact('business')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
