<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davide D’Ignazio | Full Stack Web Developer</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />

    <main>
        {{ $slot }}
    </main>
</body>
</html>
