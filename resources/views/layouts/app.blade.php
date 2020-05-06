<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> Full Screen Landing Page </title>
    <link rel="stylesheet" href="/css/landstyle2.css">
</head>

<section class="intro">
        <div class="inner">
            <div class="content">
                <div class="container">
                    <div class="login-form">
                            @guest
                                    <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                            <h1>MiniStry</h1>
</br></br></br></br></br></br>
                            <a href="/project/beranda">
                                        Klik disini untuk masuk sebagai {{ Auth::user()->name }}
                                    </a>
                                </br></br>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @endguest
                            <main class="py-4">
                                @yield('content')
                            </main>
                    </div>
                </div>
            </div>
        </div>
</section>
</html>
