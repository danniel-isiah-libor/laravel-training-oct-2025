@props(['title' => 'My Application'])

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
    </head>

    <body>
        <div style="width: 100%; height: 50px; border: 1px solid blue;">
            {{ $header }}
        </div>

        {{ $slot }}

        <div style="width: 100%; height: 50px; border: 1px solid blue;">
            {{ $footer }}
        </div>
    </body>

</html>
