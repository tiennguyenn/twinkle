<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <nav>
            <ul class="flex space-x-4 p-4 bg-gray-800">
                <li><a href="/" @class="hover:underline">Home</a></li>
                <li><a href="/posts" class="hover:underline">Posts</a></li>
                <li><a href="/counter" class="hover:underline">Counter</a></li>
            </ul>
        </nav>
        {{ $slot }}
    </body>
</html>
