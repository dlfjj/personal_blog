<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DLFJJ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                color: #636b6f;
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
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146200859-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-146200859-1');
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                {{--<div class="title m-b-md">--}}
                    {{--JIAJIE FAN--}}
                {{--</div>--}}

                <div id="typed-strings">
                    <p>MY SPACE</p>
                    {{--<p>It <em>types</em> out sentences.</p>--}}
                </div>
                <span id="typed" class="title m-b-md"></span>

                <div class="links">
                    <a href="/resume">Resume</a>
                    <a href="/blog" disabled="">Blog</a>
                    <a href="https://www.linkedin.com/in/jjfan69">Linkedin</a>
                    <a href="https://github.com/dlfjj">GitHub</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
        <script>
            let typed = new Typed('#typed', {
                strings: [
                    "JIAJIE FAN"
                ],
                typeSpeed: 80
            });
        </script>
    </body>
</html>
