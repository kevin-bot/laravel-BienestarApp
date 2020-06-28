<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BienestarApp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: #333333;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to bottom, #dd1818, #333333);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to bottom, #dd1818, #333333); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


                /*background-color: red;*/
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                        <!--@if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarme</a>
                        @endif-->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    BienestarApp
                </div>                
            </div>
        </div>
    </body>
</html>
