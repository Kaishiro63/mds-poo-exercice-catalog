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
        .container{
            max-width: 1200px;
            margin: auto;
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
        <h2 class="title">Filtres</h2>
        <div class="content">
            @foreach ($genres as $genre)
                <a href="/movies?genre={{ $genre->label }}" class="filtre">
                    {{ $genre->label }}
                </a>
            @endforeach
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
