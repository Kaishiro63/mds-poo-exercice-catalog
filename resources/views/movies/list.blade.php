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
        a{
            text-decoration: none;
            color: black;
        }
        .container {
            margin: auto;
            max-width: 900px;
        }
        .wrapper {
            display: flex;
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: #fff;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 5px 7px -1px rgba(51, 51, 51, 0.23);
            padding-right: 15px;
        }
        h1{
            font-family: "Lato", Arial, sans-serif;
            font-size: 30px;
            font-weight: 700;
            margin-top: 50px;
            margin-bottom: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .underligne{
            background-color: yellow;
            height: 4px;
            width: 160px;
            margin-bottom: 50px;
        }
        img{
            width: 100px;
        }
        .title{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 700;
            margin-left: 10px;
        }
        .score{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 0 0 auto;
        }
    </style>
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        <h1>Liste des meilleurs films :</h1><div class="underligne"></div>
        @foreach ($list as $movie)
            <a href="/movies/{{ $movie->id }}">
                <div class="wrapper">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                    <p class="title">{{ $movie->primaryTitle }} ({{ $movie->startYear }})</p>
                    <p class="score">{{ $movie->averageRating }} /10</p>
                </div>
            </a>
        @endforeach
    </div>
    <div>
        {{ $list->links('movies.pagination') }}
    </div>
    @include('includes.footer')
</body>
</html>
