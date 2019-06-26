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
                        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">会員登録</a>
                    </li>
                    @endif
                    
                    @else
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
                                ログアウト
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

            
            <form 
            action="/search" 
            method="GET" 
            role="search"
            class="row justify-content-md-center">
            @csrf

                <div
                    class="col-sm-5 first_find"
                    style="background-color: white;"
                >
                    <input
                        class="find_input"
                        type="search"
                        name="keyword"
                        placeholder="キーワード"
                       
                    />
                </div>

                <form 
                action="/search" 
                method="GET" 
                role="search" 
                class="row justify-content-md-center">
                @csrf
                
                <div
                    class="col-sm-5 second_find"
                    style="background-color: white;"
                >
                    <input
                        class="find_input"
                        type="search"
                        name="area"
                        placeholder="エリア"

                    />
                </div>

                <div class="col-sm-2 p-0">
                <button id="sbtn" type="submit" value="search">
                    <i class="fas fa-search"></i>
                </button>
                </div>

            </form>

        </div>
    </div>
</div>

<div class="mt-5 container">
    <h1 class="text-center">Hot & New</h1>

        <div class="row mt-5 justify-content-around">
            @foreach($businesses as $business)


            <div class="card" style="width: 18rem;">
                <img
                    class="card-img-top"
                    src="{{  Storage::url($business->image) }}"
                    alt=""
                />

                <div class="card-body">
                    <h5 class="card-title">
                        <a
                            href="/businesses/{{ $business->id }}"
                            >{{ $business->name }}</a
                        >
                    </h5>

                    <div class="row mb-2 pl-2">
                    @for ($i = 0; $i < 5; $i++)
                    @if ($business->rating <= $i) 
                    <div class="bg-secondary mx-1 px-1"><i class="fas fa-star text-white"></i></div>
                    @else 
                    <div class="bg-danger mx-1 px-1"><i class="fas fa-star text-white"></i></div>

                    @endif
                    @endfor
                    </div>

                    <p class="card-text">
                        {{ $business->description }}
                    </p>
                </div>
            </div>

            @endforeach
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
