<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mnemosaurus</title>
    <style>
        html,
        body {
            background-color: #222;
        }
    </style>
</head>

<body>
@yield('content')
</body>

</html>