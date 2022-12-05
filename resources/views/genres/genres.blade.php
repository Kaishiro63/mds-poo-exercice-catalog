<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
         @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);

         *{
            margin: 0;
            padding: 0;
        }
        .container{
            display: flex;
            max-width: 1200px;
            margin: auto;
        }
        .film, .series{
            margin-left: 20px;
            margin-right: 20px;
        }
        .content{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .filtre{
            font-family: "Lato", Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: yellow;
            color: black;
            border-radius: 10px;
            padding: 15px;
            margin: 10px;
            width: 100px;
        }
        .filtre:hover{
            background-color: black;
            color: yellow;
            transition: 0.4s;
        }
        a{
            text-decoration: none;
        }
        .title{
            font-family: "Lato", Arial, sans-serif;
            margin: 10px;
            font-weight: 300;
            font-size: 44px;
        }
    </style>
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        <div class="film">
            <h2 class="title">Filtres Film</h2>
            <div class="content">
                @foreach ($genres as $genre)
                    <a href="/movies?genre={{ $genre->label }}" class="filtre">
                        {{ $genre->label }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="series">
            <h2 class="title">Filtres Séries</h2>
            <div class="content">
                @foreach ($genres as $genre)
                    <a href="/series?genre={{ $genre->label }}" class="filtre">
                        {{ $genre->label }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
