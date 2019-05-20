@extends('layouts.app') @section('nav') @extends('layouts.homenav') @endsection
@section('content') @foreach($businesses as $business)

<div class="container mt-5">
    <div class="row">
        <div class="col-6 offset-3">
            <h1>{{ $business->name }}</h1>
        </div>
    </div>

    <div class="row">
        <img src="{{ url('images'.$business->image) }}" />
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <p>{{ $business->address }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <p>{{ $business->contact }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <p>{{ $business->url }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <p>{{ $business->description }}</p>
        </div>
    </div>

    <!-- {{-- <TODO>
      <div class="row">
        <div class="col-6 offset-3">
            <p>{{ $business.image }}</p>
        </div>
    </div> --}} -->
</div>
@endforeach @endsection
