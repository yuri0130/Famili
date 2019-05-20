@extends('layouts.app') @section('content')

<div id="header">
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                Famili
            </div>

            <label class="row">
                <div
                    class="col-sm-6 first_find"
                    style="background-color: white;"
                >
                    <input
                        class="find_input"
                        type="text"
                        name="Find"
                        placeholder="Keywords"
                    />
                </div>

                <div
                    class="col-sm-6 second_find"
                    style="background-color: white;"
                >
                    <input
                        class="find_input"
                        type="text"
                        name="Find"
                        placeholder="Area"
                    />
                    <button id="sbtn" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </label>

            <div class="links">
                <a class="nav-link-item" href="https://laravel.com/docs"
                    >Playgrounds</a
                >
                <a class="nav-link-item" href="https://laracasts.com"
                    >Restaurants</a
                >
                <a class="nav-link-item" href="https://laravel-news.com"
                    >WIFI Spots</a
                >
            </div>
        </div>
    </div>
</div>

@endsection
