@extends('layouts.app') @extends('layouts.nav') @section('content')
@foreach($businesses as $business)

<div class="container mt-5" id="businesses_main">
    <div class="row">
        <div class="col-4">
            <img
                src="{{ Storage::url($business->image) }}"
                class="rounded img-fluid"
            />
        </div>

        <div class="col-8">
            <h1>
                <a
                    href="businesses/{{ $business->id }}"
                    >{{ $business->name }}</a
                >
            </h1>

            <p>{{ $business->prefecture }}</p>

            <p>{{ $business->address }}</p>

            <p>{{ $business->description }}</p>
        </div>
    </div>
</div>
@endforeach @endsection
