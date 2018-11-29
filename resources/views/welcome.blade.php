<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('img/safari-pinned-tab.svg') }}" color="#b6d161">
        <meta name="apple-mobile-web-app-title" content="SuperList">
        <meta name="application-name" content="SuperList">
        <meta name="msapplication-TileColor" content="#b6d161">
        <meta name="msapplication-TileImage" content="{{ asset('img/mstile-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <!-- Animate CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Bienvenido | {{ config('app.name') }}</title>
        <style type="text/css">
            body {
                background-image: url('img/background-supermarket.jpg');
                background-size: cover;
                color: #FFFFFF;
            }
            #wrapper {
                position: relative;
                float: none;
                width: 100vw;
                min-height: 100vh;
            }
            .box-dark {
                background-color: rgba(0, 0, 0, 0.60);
                padding: 2em;
            }
            .center-vertically {
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        
        <div id="wrapper" class="center-vertically animated fadeIn">
            
            <section id="content">

                <div class="container">

                    <div class="box-dark shadow-lg animated fadeInDown">
                        <h1 class="text-center">Bienvenido a <strong>{{ config('app.name') }}</strong>.</h1>
                        <h5 class="text-center">El lugar para que puedas realizar tu lista de compras.</h5>

                        <hr>

                        @if (Route::has('login'))
                        <div align="center">
                            @auth
                                <a href="{{ url('/home') }}">Inicio</a>
                            @else
                                @if (Route::has('register'))
                                    <a class="btn btn-lg btn-primary mb-3" href="{{ route('register') }}"> Regístrate</a>
                                @endif
                                <div class="clearfix"></div>
                                <a href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
                            @endauth
                        </div>
                        @endif
                    </div>
                    
                </div><!--.container-->

            </section>

        </div><!--#wrapper-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
