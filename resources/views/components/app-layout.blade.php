<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/60ae516120.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('css/app.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Alicia Wilkerson - Full Stack Developer</title>
</head>
<body>
    <div class="body">
        <x-header></x-header>
        <section class="main">
            <x-menu></x-menu>
            <main>
                {{ $slot }}
            </main>
        </section>
        <x-footer></x-footer>
    </div>
</body>
