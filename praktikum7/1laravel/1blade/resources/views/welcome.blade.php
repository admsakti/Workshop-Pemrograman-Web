<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade</title>
</head>
<body>
    {{-- Contoh Blade --}}
    {{ date('Y') }}
    <br>
    {{ 3 + 7 }}
    <br>

    {{ '<h3>Hello Laravel 1</h3>' }}
    {!! '<h3>Hello Laravel 2</h3>' !!}
    <?= '<h3>Hello Laravel 3</h3>' ?>

    @php
        $message = "Hello Laravel 4";
    @endphp
    <h2>{{ $message }}</h2>
</body>
</html>