@extends('layouts.test')

@section('content')
<section class="intro">
        <div class="inner">
            <div class="content">
                <div class="container">
                    <div class="login-form">
                        <h1>MiniStry</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <input type="submit" placeholder="Log-In">
                        <a href="/register"> Haven't register yet? </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
