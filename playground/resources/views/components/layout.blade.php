<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900 relative isolate ">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="/src/style.css" rel="stylesheet">


    <!-- Styles / Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

    @isset($css)
    {{ $css }}
    @endisset



    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @endif


    <title>{{ $title ?? 'My Application' }}</title>
</head>

<body class="h-full">


    @isset($header)
    {{ $header }}
    @endisset

    {{ $slot }}


    @isset($footer)
    {{ $footer }}
    @endisset
</body>

@isset($js)
{{ $js }}
@endisset


</html>
