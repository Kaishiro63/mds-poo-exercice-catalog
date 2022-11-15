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
        * {
            margin: 0;
            padding: 0;
        }
        .movie-card {
            font: 14px/22px "Lato", Arial, sans-serif;
            color: #A9A8A3;
        }
        .hero {
            height: 342px;
            margin:0;
            position: relative;
            overflow: hidden;
            z-index:1;
        }
        .hero:before {
            content:'';
            width:100%; height:100%;
            position:absolute;
            overflow: hidden;
            top:0; left:0;
            background:red;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba( 0, 0, 0.5)), url({{ asset('images/background-cine.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
            z-index:-1;
            transform: skewY(-2.2deg);
            transform-origin:0 0;
        }
        .cover {
            position: absolute;
            top: 160px;
            left: 40px;
            z-index: 2;
        }
        .details {
            padding: 190px 0 0 380px;
        }
        .details .title1 {
            color: white;
            font-size: 44px;
            margin-bottom: 13px;
            position: relative;
        }
        .details .title1 span {
            position: absolute;
            top: 3px;
            margin-left: 12px;
            background: #C4AF3D;
            border-radius: 5px;
            color: #544C21;
            font-size: 14px;
            padding: 0px 4px;
        }
        .title2 {
            color: #C7C1BA;
            font-size: 23px;
            font-weight: 300;
            margin-bottom: 15px;
        }
        .votes img{
            width: 15px;
            position: relative;
            top: 2px;
            padding-right: 10px;
        }
        .description {
            bottom: 0px;
            height: 200px;
            font-size: 16px;
            line-height: 26px;
            color: #B1B0AC;
        }
        .column {
            max-width: 700px;
            padding: 190px 0 0 380px;
            padding-top: 30px;
        }
    </style>
</head>
<body>
    <div class="movie-card">
        <div class="container">
          <img src="{{ $movie->poster }}" alt="cover" class="cover" />
          <div class="hero">
            <div class="details">
              <div class="title1">{{ $movie->primaryTitle }}<span>{{ $movie->startYear }}</span></div>
              <div class="title2">Durée du film : {{ $movie->runtimeMinutes }} minutes</div>
              <span class="votes">Nombre de votes : {{ $movie->numVotes }} <br> {{ $movie->averageRating }}/10 <img src="{{asset('images/etoile.png')}}" alt="icon avis"></span>
            </div>
          </div>
          <div class="description">
            <div class="column">
              <p><strong>Résumé : </strong><br><br>{{ $movie->plot }}</p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>


{{-- <div class="movie">
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
    </div> --}}


    