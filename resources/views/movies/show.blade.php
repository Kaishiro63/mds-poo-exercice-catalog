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
        .movie{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container{
            width: 100vw;
            max-width: 1280px;
            min-width: 1000px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 0 auto;
        }

        .border{
            height: 469px;
            width: 340px;
            background: transparent;
            border-radius: 10px;
            transition: border 1s;
            position: relative;
        }

        .border:hover{
            border: 1px solid white;
        }

        .card{
            height: 479px;
            width: 350px;
            background: grey;
            border-radius: 10px;
            transition: background 0.8s;
            overflow: hidden;
            background: black;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .card0{
            background: url('{{ $movie->poster }}');
            background-repeat: no-repeat;
            background-size: 350px;
        }

        .card0:hover{
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ $movie->poster }}');
            background-repeat: no-repeat;
            background-size: 400px;
        }

        .card0:hover h2{
            opacity: 1;
        }

        .card0:hover .one{
            opacity: 1;
        }

        h2{
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 40px;
            color: white;
            margin: 20px;
            opacity: 0;
            transition: opacity 1s;
        }

        .one{
            opacity: 0;
            transition: opacity 1s;
        }

        .info{
            position: absolute;
            fill: #fff;
            color: #fff;
            height: 130px;
            top: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding-left: 10px;
            font-size: 20px;
        }
        .desc{
            margin-top: 50px;
            max-width: 800px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="movie">
        <h1>Survolez la carte pour plus d'info</h1>
        <div class="container">
            <div class="card card0">
                <div class="border">
                    <h2>{{ $movie->primaryTitle }}</h2>
                    <div class="info">
                        <p class="one">Date de sortie : {{ $movie->startYear }}</p>
                        <p class="one">Durée du film : {{ $movie->runtimeMinutes }} minutes</p>
                        <p class="one">Avis : {{ $movie->averageRating }}/10</p>
                        <p class="one">Nombre de votes : {{ $movie->numVotes }}</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="desc"><strong>Résumé : </strong><br><br>{{ $movie->plot }}</p>
    </div>
</body>
</html>
