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

    </style>
</head>
<body>
    <div>
        <h2>Filtres</h2>
        @foreach ($genres as $genre)
            <div>
                {{ $genre->label }}
            </div>
        @endforeach
    </div>
</body>
</html>
