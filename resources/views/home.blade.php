@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Famili</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
            crossorigin="anonymous"
        />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <!-- CSS style -->

        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="header">
            <nav
                class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
            >
                <div class="container">
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('login') }}"
                                    >{{ __('Login') }}</a
                                >
                            </li>
                            @if (Route::has('signup'))
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('signup') }}"
                                    >{{ __('Signup') }}</a
                                >
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
    </body>
</html>
