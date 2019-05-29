@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8">
    @foreach($businesses as $business)

<hr id="businesses_main">
<div class="row mb-2">
    <div class="col-4">
            <img src="{{ Storage::url($business->image) }}" class="rounded img-thumbnail" />
        </div>

        <div class="col-8">
            <h3>
                <a href="/businesses/{{ $business->id }}">{{ $business->name }}</a>
            </h3>

            <div class="row mb-2 pl-2">
                @for ($i = 0; $i < 5; $i++) @if ($business->rating
                    <= $i) <div class="bg-secondary mx-1 p-1">
                        <i class="fas fa-star text-white"></i>
            </div>
            @else
            <div class="bg-danger mx-1 p-1">
                <i class="fas fa-star text-white"></i>
            </div>

            @endif @endfor
        </div>

        <p>{{ $business->prefecture }}</p>

        <p>{{ $business->address }}</p>

        <p>{{ $business->description }}</p>
    </div>
</div>
</hr>
@endforeach


<!-- {{-- //TODO API 
<div class="col-md-4">

    <div id="map"></div>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{
                    $API_KEY
                }}&callback=initMap" async defer></script>
</div>
--}} -->


</div>
@endsection