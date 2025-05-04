<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    @include('navbar')

    <h1 class="text-3xl font-bold underline text-green-700">
      Tes Tailwind
    </h1>
    <p class="text-green-600 dark:text-sky-400">The quick brown fox...</p>
  </body>
</html>
