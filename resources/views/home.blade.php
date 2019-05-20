@extends('layouts.app') @section('content')

<header>
    <nav
        class="navbar navbar-expand-md navbar-light bg-white shadow-sm home-navbar"
    >
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{
                            __('Login')
                        }}</a>
                    </li>
                    @if (Route::has('signup'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signup') }}">{{
                            __('Signup')
                        }}</a>
                    </li>
                    @endif @else
                    <li class="nav-item dropdown">
                        <a
                            id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre
                        >
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>

                        <div
                            class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="navbarDropdown"
                        >
                            <a
                                class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"
                            >
                                {{ __('Logout') }}
                            </a>

                            <form
                                id="logout-form"
                                action="{{ route('logout') }}"
                                method="POST"
                                style="display: none;"
                            >
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                <a href="">Famili</a>
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

<div class="hot-business-container mt-5">
    <h1 class="text-center">Hot & New</h1>
    <div class="hot-businesses">
        <div class="row">
            @foreach($businesses as $business)
            <div class="card" style="width: 18rem;">
                <img
                    class="card-img-top"
                    src="{{$business->image}}"
                    alt="Card image cap"
                />
                <div class="card-body">
                    <h5 class="card-title">
                        <a
                            href="/business/{{ $business->id}}"
                            >{{ $business->name }}</a
                        >
                    </h5>
                    <p class="card-text">
                        {{ $business->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<footer>
    <div class="container d-flex flex-center">
        <p>Created by Yurie</p>

        <ul>
            <li class="pl-2"><a href="https://github.com/yuri0130" target="_blank"><i class="fab fa-github"></i></a></li>
            <li class="pl-2"><a href="https://www.linkedin.com/in/yurie-shiga-969180111/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="pl-2"><a href="https://yurisc.com/portfolio" target="_blank"><i class="fas fa-home"></i></a></li>

        </ul>
    </div>
</footer>
@endsection
