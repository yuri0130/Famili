<?php

namespace App\Http\Controllers;

use App\Business;
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
        $file = $request->file('file');

        // 第一引数はディレクトリの指定
        // 第二引数はファイル
        // 第三引数はpublickを指定することで、URLによるアクセスが可能となる
        // imagesディレクトリにアップロード
        $path = Storage::disk('s3')->putFile('/images', $file, 'public');

        // ファイル名を指定する場合はputFileAsを利用する
        // $path = Storage::disk('s3')->putFileAs('/', $file, 'hoge.jpg', 'public');


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

        $reviews = DB::table('review')
            ->where('business_id', "=", $business_id)
            ->get();

        return view(
            'business.show',
            compact('business', 'reviews')
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
        $file = $request->file('file');
        // 第一引数はディレクトリの指定
        // 第二引数はファイル
        // 第三引数はpublickを指定することで、URLによるアクセスが可能となる

        $path = Storage::disk('s3')->putFile('/', $file, 'public');
        // hogeディレクトリにアップロード
        // $path = Storage::disk('s3')->putFile('/hoge', $file, 'public');
        // ファイル名を指定する場合はputFileAsを利用する
        // $path = Storage::disk('s3')->putFileAs('/', $file, 'hoge.jpg', 'public');

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
