@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-around">
        <div>
            <h1>
                <strong>
                    {{ $business->name }}
                </strong>
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
            <div class="ml-1">
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
            </div>
        </div>

        <div class="pt-1">
            @can('edit_business')
            <div>
                <a class="btn" href="/businesses/{{ $business->id }}/edit"
                    >編集する</a
                >
            </div>
            @endcan

            <div>
                <img
                    src="{{ Storage::url($business->image) }}"
                    class="rounded img-fluid"
                    style=" width: 210px; height: 210px;"
                />
            </div>
        </div>
    </div>

    <div class="mt-3 justify-content-around">
        <div class="mt-4 text-right">
            <a href="/businesses/{{ $business->id }}/review/create"
                ><i class="fas fa-star"></i>レビューを書く</a
            >
        </div>

        <hr />
        <h4 class="text-center">Reviews</h4>
        @foreach($reviews as $review)
        <div>
            {{--<strong>{{ $review->user->name }}</strong
            >--}}

            <p>{{ $review->comment }}</p>
            <hr />
            <br />
        </div>
        @endforeach
    </div>
</div>
@endsection
