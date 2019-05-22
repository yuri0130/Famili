@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container mt-5">
    <h1>
        {{ $business->name }}
    </h1>

    <div class="row mb-2 pl-3">
        @for ($i = 0; $i < 5; $i++) @if ($business->rating <= $i)
        <div class="bg-secondary mx-1 p-1">
            <i class="fas fa-star text-white"></i>
        </div>
        @else
        <div class="bg-danger mx-1 p-1">
            <i class="fas fa-star text-white"></i>
        </div>
        @endif @endfor
    </div>

    <p>
        {{ $business->prefecture }}
    </p>

    <p>
        {{ $business->address }}
    </p>

    <p>
        {{ $business->contact }}
    </p>

    <p>
        <a
            href="{{ $business->url }}"
            target="”_blank”"
            >{{ $business->url }}</a
        >
    </p>

    <p>
        {{ $business->description }}
    </p>

    <p>
        <img
            src="{{ Storage::url($business->image) }}"
            class="rounded img-fluid"
        />
    </p>
</div>

@endsection
