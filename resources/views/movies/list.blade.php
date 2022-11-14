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
        .container {
            margin: auto;
            max-width: 900px;
        }

        .wrapper {
            display: flex;
            margin-top: 10px;
            margin-bottom: 10px;
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
<body></body>
    <div class="container">
        @foreach ($list as $movie)
            <div class="wrapper">
                <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                <p class="title">{{ $movie->primaryTitle }} ({{ $movie->startYear }})</p>
                <p class="score">{{ $movie->averageRating }} /10</p>
            </div>
        @endforeach
    </div>
</body>
</html>
