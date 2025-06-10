<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css')
</head>

<body>
  @include('navbar')

  <main class="p-8">
    <div class="bg-blue-100 text-center p-8 rounded-lg mb-6">
      <h1 class="text-3xl font-bold">Punya event sekolah yang menarik?</h1>
      <p class="text-lg mt-2">Jual tiketmu di sini!</p>
      <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Daftar Sekarang</button>
    </div>
    <!-- Event Categories -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-gray-200 p-6 rounded-lg text-center">
        <h2 class="text-xl font-bold">LOMBA</h2>
        <p class="text-lg">20 Event</p>
      </div>
      <div class="bg-gray-200 p-6 rounded-lg text-center">
        <h2 class="text-xl font-bold">SEMINAR</h2>
        <p class="text-lg">20 Event</p>
      </div>
      <div class="bg-gray-200 p-6 rounded-lg text-center">
        <h2 class="text-xl font-bold">KONSER</h2>
        <p class="text-lg">20 Event</p>
      </div>
      <div class="bg-gray-200 p-6 rounded-lg text-center">
        <h2 class="text-xl font-bold">CHARITY</h2>
        <p class="text-lg">20 Event</p>
      </div>
    </div>
  </main>
</body>

</html>