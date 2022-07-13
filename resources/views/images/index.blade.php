<!DOCTYPE html>
<html>
    <head>
        <title>Image Uploading with Vue + Larave</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="max-w-2xl mx-auto mt-24">
            <h1 class="text-4xl font-bold text-center">Kép feltöltés</h1>

            <div id="app"></div>
        </div>
    </body>
</html>
