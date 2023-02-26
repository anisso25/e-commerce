<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

     * {
         box-sizing: border-box;
         margin: 0;
         padding: 0;
         font-family: Raleway, sans-serif;
     }

     body {
         background: linear-gradient(90deg, #e9f4c5, #d29566);
     }

     .container {
         display: flex;
         align-items: center;
         justify-content: center;
         min-height: 100vh;
     }

     .screen {
         background: linear-gradient(90deg, #91bf38, #add068);
         position: relative;
         height: 600px;
         width: 360px;
         box-shadow: 10px 0px 24px #535f8a;
     }

     .screen__content {
         z-index: 1;
         position: relative;
         height: 100%;
     }

     .screen__background {
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         z-index: 0;
         -webkit-clip-path: inset(0 0 0 0);
         clip-path: inset(0 0 0 0);
     }

     .screen__background__shape {
         transform: rotate(45deg);
         position: absolute;
     }

     .screen__background__shape1 {
         height: 520px;
         width: 520px;
         background: #FFF;
         top: -50px;
         right: 120px;
         border-radius: 0 72px 0 0;
     }

     .screen__background__shape2 {
         height: 220px;
         width: 220px;
         background: #00b4e6;
         top: -172px;
         right: 0;
         border-radius: 32px;
     }

     .screen__background__shape3 {
         height: 540px;
         width: 190px;
         background: linear-gradient(270deg, #f3781e, #c3c787);
         top: -24px;
         right: 0;
         border-radius: 32px;
     }

     .screen__background__shape4 {
         height: 400px;
         width: 200px;
         background: #00b4e6;
         top: 420px;
         right: 50px;
         border-radius: 60px;
     }

     .login {
         width: 286px;
         padding: 0px;
         padding-top: 140px;
         padding-left: 29px;
     }

     .login__field {
         padding: 28px 0px;
         position: relative;
     }

     .login__icon {
         position: absolute;
         top: 30px;
         color: #7875B5;
     }

     .login__input {
         border: none;
         border-bottom: 2px solid #D1D1D4;
         background: none;
         padding: 10px;
         padding-left: 6px;
         font-weight: 700;
         width: 75%;
         transition: .2s;
     }

     .login__input:active,
     .login__input:focus,
     .login__input:hover {
         outline: none;
         border-bottom-color: #6A679E;
     }

     .login__submit {
         background: #fff;
         font-size: 14px;
         margin-top: 60px;
         padding: 11px 80px;
         border-radius: 26px;
         border: 1px solid #D4D3E8;
         text-transform: uppercase;
         font-weight: 700;
         display: flex;
         align-items: center;
         width: 100%;
         color: #4C489D;
         box-shadow: 0px 2px 2px #5C5696;
         cursor: pointer;
         transition: .2s;
     }.register__submit {
         background: #fff;
         font-size: 14px;
         margin-top: 16px;
         padding: 12px 28px;
         border-radius: 26px;
         border: 1px solid #D4D3E8;
         text-transform: uppercase;
         font-weight: 700;
         display: flex;
         align-items: center;
         width: 100%;
         color: #4C489D;
         box-shadow: 0px 2px 2px #5c5696;
         cursor: pointer;
         transition: .2s;
     }

     .login__submit:active,
     .login__submit:focus,
     .login__submit:hover {
         border-color: #6A679E;
         outline: none;
     }

     .button__icon {
         font-size: 24px;
         margin-left: auto;
         color: #7875B5;
     }

     .social-login {
         position: absolute;
         height: 140px;
         width: 160px;
         text-align: center;
         bottom: 0px;
         right: 0px;
         color: #fff;
     }

     .social-icons {
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .social-login__icon {
         padding: 20px 10px;
         color: #fff;
         text-decoration: none;
         text-shadow: 0px 0px 8px #7875B5;
     }

     .social-login__icon:hover {
         transform: scale(1.5);
     }
     </style>

    <body class="vh-100" style="background-color: #9A616D;">
        <section >
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-20">
                        <div class="card" style="border-radius: 1rem;">
                                <div class="row g-0">
                                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img2.webp"
                                                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                    </div>
                                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xxl-1">

                                        <form class="login" method="POST" action="{{ route('login') }}" >
                                            @csrf
                                            <img src="{{ asset('frontend/images/logo101.png') }}" />
                                            <div class="login__field">
                                                    <span class="material-symbols-outlined">
                                                    mail
                                                    </span>

                                                <input type="email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="login__field">
                                                    <span class="material-symbols-outlined">
                                                    lock
                                                    </span>

                                                <input id="password" type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Passwort">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                            <button type="submit" class="button login__submit">
                                                <span class="button__text"> {{ __('login') }}</span>
                                                <i class="button__icon fas fa-chevron-right"></i>
                                            </button>
                                            <a href="/register">
                                            <button type="button" class="button register__submit">
                                                <span class="button__text"> Créer un compte </span>
                                                <i class="button__icon fas fa-chevron-right"></i>
                                            </button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </body>
</html>

