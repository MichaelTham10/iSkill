<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/auth/login.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
    <div id="login-wrap">
        
        
        <div id="image-container">
            <a href="">
                <img id="back-btn" src="{{asset('assets/icon/loginBack.svg')}}" alt="">
            </a>
            
            <div id="image-wrap">
                <img id="ils" src="{{asset('assets/login-ils.png')}}" alt="">
            </div>
        </div>
        <div id="form-input">
            
            <form id="form" method="POST" action="{{ route('login') }}">
                <img src="{{asset('assets/LogoLogin.png')}}" alt="" id="logo-img" width="177px" height="66px">
                @csrf
                <div id="text-login">
                    <p id="masuk">MASUK</p>
                    <p id="masuk-desc">Masuk untuk mulai kursus pertamamu</p>
                </div>
                <div id="form-group">
                    <p>{{ __('E-Mail') }}</p>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div id="form-group">
                    <p>{{ __('Password') }}</p>

                    <div class="col-md-6">
                        <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

               

                <div id="form-group">
                    <div>
                        <button type="submit">
                           M A S U K
                        </button>
                    </div>
                </div>

                <div id="form-extension">
                    <div>
                        <p>Tidak punya akun? <a href="{{ route('register') }}">Daftar disini</a></p>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Lupa Password?</a>
                        @endif
                        
                    </div>
                </div>
            </form>
        </div>


    </div>
</body>
</html>




