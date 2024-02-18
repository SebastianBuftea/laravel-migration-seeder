<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-12">
                    <h1> TRENI IN PARTENZA OGGI</h1>
                </div>
                @if (count($trains) == 0)
                    <h2>Nessun treno previsto per oggi, ci dispiace</h2>
                @else
                    @foreach ($trains as $train)
                        <div class="col-3 my-2 ">
                            <div class="card_ p-2">
                                <h5>{{ $train['agency'] }}</h5>
                                <span>Number: {{ $train['number_train'] }}</span>
                                <div>From:{{ $train['departure_station'] }}</div>
                                <div>To:{{ $train['arrival_station'] }}</div>
                                <div>Departure time:{{ $train['departure_time'] }}</div>
                                <div>Arrive at: {{ $train['arrival_time'] }}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </main>

</body>

</html>
