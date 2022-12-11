<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <style>
         @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
        *{
            margin: 0;
            padding: 0;
        }
        .bg{
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{asset('images/bg-cine.jpg')}});
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
        .test{
            position: absolute;
            top: 35%;
            left: 53%;
        }
        h1{
            font-family: "Rubik", sans-serif;
            color: white;
            font-size: 50px;
            font-weight: 900;

        }
        .test a{
            list-style: none;
            text-decoration: none;
            color: white;
            font-family: sans-serif;
            font-weight: bold;
            padding: 20px;
        }
        .btn {
            line-height: 50px;
            height: 50px;
            text-align: center;
            width: 250px;
            cursor: pointer;
        }
        .btn-one {
            color: #FFF;
            transition: all 0.3s;
            position: relative;
        }
        .btn-one span {
            transition: all 0.3s;
        }
        .btn-one::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
            transition: all 0.3s;
            border-top-width: 1px;
            border-bottom-width: 1px;
            border-top-style: solid;
            border-bottom-style: solid;
            border-top-color: rgba(255,255,255,0.5);
            border-bottom-color: rgba(255,255,255,0.5);
            transform: scale(0.1, 1);
        }
        .btn-one:hover span {
            etter-spacing: 2px;
        }
        .btn-one:hover::before {
            opacity: 1;
            transform: scale(1, 1);
        }
        .btn-one::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: all 0.3s;
            background-color: rgba(255,255,255,0.1);
        }
        .btn-one:hover::after {
            opacity: 0;
            transform: scale(0.1, 1);
        }
    </style>
</head>
<body>
    <div class="bg">
        @include('includes.navbar')
        <div class="test">
            <h1>A La Recherche <br> D'un Film ? D'une Série ?</h1>
            <a href="">
                <div class="box-1">
                    <div class="btn btn-one">
                        <span>FAITES VOTRE CHOIX !</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
