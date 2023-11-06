<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10</title>
</head>

<body>
    <h1>Hello from View</h1>
    <h2>Location = {{$location['name']}}</h2>
    {{-- <h2>Country = {{$country}}</h2> --}}
    {{-- <h2>Population = {{$population}}</h2> --}}
    <h2>Seasons = {{join(",",$seasons)}}</h2>
</body>

</html>
