<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiniStry</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="/css/minstyle.css">

</head>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<body>

    <!--NavBar Start-->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">MiniStry</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="/project/beranda">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="/project/perpustakaan">Library</a>
                    </li>
                    <li class="nav-link">
                        <a href="/project/tulis">Tulis Cerpen</a>
                    </li>
                    <li class="nav-link">
                        <a href="/project/tentang">About Us</a>
                    </li>
                    <li class="nav-link"> <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a
                    href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiNwujdwZ_pAhUNdCsKHTI0ACwQFjAAegQIBBAB&url=https%3A%2F%2Fid-id.facebook.com%2F&usg=AOvVaw2YRBv2n6NI_rUCisIjYsw5"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://www.google.com/search?client=opera&q=instagram&sourceid=opera&ie=UTF-8&oe=UTF-8#"><i
                        class="fab fa-instagram"></i></a>
                <a
                    href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwj-2LzGwZ_pAhUFg-YKHZXCAO4QFjAAegQIAxAB&url=https%3A%2F%2Ftwitter.com%2Flogin%3Flang%3Did&usg=AOvVaw10YWuEw3m0oNKeC3Gcg3h3"><i
                        class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/?hl=id&gl=ID"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!--Navbar End-->
    <script src="/js/Jquery3.4.1.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/main.js"></script>
@yield('content')