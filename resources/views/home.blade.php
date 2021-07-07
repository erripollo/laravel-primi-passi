<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Enrico Pollone</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
                font-size: 82px;
            }

            .subtitle{
                text-transform: uppercase;
                font-size: 20px;
                letter-spacing: 13px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 60px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">

                <div>
                    <img width=250px src="https://cdn2.iconfinder.com/data/icons/avatars-99/62/avatar-370-456322-512.png" alt="img profile">
                </div>

                <div class="title">
                    {{$name}} {{$lastname}}
                </div>
                <div class="subtitle m-b-md">Full-stack developer</div>

                <div class="links">
                    @foreach($skills as $skill)
                        <a href="{{$skill['link']}}">{{$skill['name']}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
