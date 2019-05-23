@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container mt-5">
    <div>
        <div class="d-flex">
            <div>
                <h1>
                    {{ $business->name }}
                </h1>

                <div class="row mb-2 pl-2 ">
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
            </div>

            <div id="review" class="ml-5 pt-3">
                <a href=""><i class="fas fa-star"></i>レビューを書く</a>
            </div>
        </div>

        <div>
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
                    target="_blank"
                    >{{ $business->url }}</a
                >
            </p>
            <p>
                {{ $business->description }}
            </p>

            <div class="col-sm-4">
                <img
                    src="{{ Storage::url($business->image) }}"
                    class="rounded img-fluid"
                    style=" width: 210px; height: 210px;"
                />
            </div>
        </div>
    </div>
</div>
@endsection
