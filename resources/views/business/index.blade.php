@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            @foreach($businesses as $business)

            <div class="mt-5" id="businesses_main">
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
            @endforeach
        </div>

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
            <script
                src="https://maps.googleapis.com/maps/api/js?key={{
                    $API_KEY
                }}&callback=initMap"
                async
                defer
            ></script>
        </div>
    </div>
</div>
@endsection
